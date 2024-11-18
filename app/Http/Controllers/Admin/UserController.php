<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $headers = ['ID', 'Name', 'Email', 'Role', 'Ngày Tạo'];

        $query = User::query();

        if ($request->has('search')) {
            $search = $request->input('search');

            $query->where('name', 'like', "%{$search}%");
        }
        $query->where('id', '<>', 1);

        $users = $query->with('roles', 'permissions')->orderBy('created_at', 'desc')->paginate(DEFAULT_PAGE);

        return view('admin.users.index', compact('users', 'headers'));
    }

    public function create()
    {
        // $roles = Role::where('name', '<>', 'admin')->get();

        $permission = Permission::get();

        return view('admin.users.create', compact('permission'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string', 'max:255'],
        ]);

        $checkRoleExist = Role::where('name', $request->role)->first();
        if (!$checkRoleExist) {
            Role::create(['name' => $request->role]);
        }


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        $user->assignRole($request->role);

        // $user->givePermissionTo($request->permission);
        $user->syncPermissions($request->permission);

        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);

        $roles = Role::where('name', '<>', 'admin')->get();

        $current_role = $users->roles->first();

        $permission = Permission::get();

        $current_permission = $users->getDirectPermissions();

        return view('admin.users.edit', compact('users', 'roles', 'current_role', 'permission', 'current_permission'));
    }

    public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string', 'max:255'],
        ]);

        // $currentRole = Role::where('name', $request->role_old)->first();

        $checkRoleExist = Role::where('name', $request->role)->first();

        if (!$checkRoleExist) {

            Role::create(['name' => $request->role]);

        }

        $users->assignRole($request->role);

        $users->name = $request->name;

        $users->email = $request->email;

        if ($request->filled('password')) {
            $users->password = Hash::make($request->password);
        }

        $users->save();
        // $currentRole->save();
        
        if ($id != 1) {
            $users->syncRoles($request->role);
        }


        // $role = Role::find($users->roles->first()->id);

        $users->syncPermissions($request->permission);

        return redirect()->back()->with('success', 'User updated successfully.');
    }

    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect()->route('admin.users.index')->with('success', 'Users deleted successfully.');
    }

    public function addPermissionView()
    {
        return view('admin.users.phan_quyen');
    }

    public function addPermission(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:permissions'],
            'title' => ['string', 'max:255', 'unique:permissions']
        ]);



        Permission::create([
            'name' => $request->name,
            'title' => $request->title
        ]);
        // $roles = Role::all();

        // // Lấy tất cả các permissions
        // $permissions = Permission::all();

        // // Gán tất cả các permissions cho mỗi role
        // foreach ($roles as $role) {
        //     $role->syncPermissions($permissions);
        // }

        return redirect()->back()->with('success', 'Thêm mới vai trò thành công.');
    }

    public function addRoles(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:roles,name'],
        ]);



        Role::create([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'Thêm mới roles thành công.');
    }
}
