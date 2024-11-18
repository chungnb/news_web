function checkSEO() {
    // Lấy giá trị từ form
    const title = document.getElementById('title_seo').value;
    const description = document.getElementById('description_seo').value;
    const content = editor.getData();
    const heading = document.getElementById('heading_seo').value;
    const image = document.getElementById('image').value;
    const internalLink = document.getElementById('internalLink').value;
    const externalLink = document.getElementById('externalLink').value;
    const primaryKeyword = document.getElementById('primaryKeyword_seo').value.toLowerCase();
    const secondaryKeyword = document.getElementById('secondaryKeyword_seo').value.toLowerCase();

    // Đếm số từ trong các trường
    const wordCountTitle = countWords(title);
    const wordCountDescription = countWords(description);
    const wordCountContent = countWords(content);
    const wordCountHeading = countWords(heading);
    const wordCountImage = countWords(image);
    const wordCountInternalLink = countWords(internalLink);
    const wordCountExternalLink = countWords(externalLink);

    // Title
    let seoTitleScore = 0;
    let seoTitle1Score = 0;
    let seoTitle2Score = 0;
    let seoTitle3Score = 0;
    let seoTitlePrimaryKeyScore = 0;
    let seoTitleSecondaryKeyScore = 0;
    if (wordCountTitle >= 5) seoTitle1Score += 2;
    let Title1 = document.getElementById("title-1");
    Title1.value = seoTitle1Score;
    if (wordCountTitle > 10) seoTitle2Score += 2;
    let Title2 = document.getElementById("title-2");
    Title2.value = seoTitle2Score;
    if (wordCountTitle > 12 && wordCountTitle <15) seoTitle3Score += 2;
    let Title3 = document.getElementById("title-3");
    Title3.value = seoTitle3Score;
    if (wordCountTitle < 5 && wordCountTitle > 15) seoTitleScore += 0;
    if (countKeywordMatches(title, primaryKeyword) > 0 && seoTitlePrimaryKeyScore === 0) seoTitlePrimaryKeyScore = 10;
    let Title4 = document.getElementById("title-4");
    Title4.value = seoTitlePrimaryKeyScore;
    if (countKeywordMatches(title, secondaryKeyword) > 0 && seoTitleSecondaryKeyScore === 0) seoTitleSecondaryKeyScore = 2;
    let Title5 = document.getElementById("title-5");
    Title5.value = seoTitleSecondaryKeyScore;

    const totalTitleScore = (seoTitleScore + seoTitle1Score + seoTitle2Score + seoTitle3Score + seoTitlePrimaryKeyScore + seoTitleSecondaryKeyScore); 

    //Description
    let seoDes1Score = 0;
    let seoDes2Score = 0;
    let seoDes3Score = 0;
    let seoDescriptionPrimaryKeyScore = 0;
    let seoDescriptionSecondaryKeyScore = 0;
    if (wordCountDescription > 0) seoDes1Score += 2;
    let Des1 = document.getElementById("des-1");
    Des1.value = seoDes1Score;
    if (wordCountDescription > 20) seoDes2Score += 2;
    let Des2 = document.getElementById("des-2");
    Des2.value = seoDes2Score;
    if (wordCountDescription > 30 &&  wordCountDescription <70) seoDes3Score += 2;
    let Des3 = document.getElementById("des-3");
    Des3.value = seoDes3Score;
    if (countKeywordMatches(description, primaryKeyword) > 0 && seoDescriptionPrimaryKeyScore === 0) seoDescriptionPrimaryKeyScore += 10;
    let Des4 = document.getElementById("des-4");
    Des4.value = seoDescriptionPrimaryKeyScore;
    if (countKeywordMatches(description, secondaryKeyword) > 0 && seoDescriptionSecondaryKeyScore === 0) seoDescriptionSecondaryKeyScore += 4; 
    let Des5 = document.getElementById("des-5");
    Des5.value = seoDescriptionSecondaryKeyScore;

    const totalDescriptionScore = (seoDes1Score + seoDes2Score + seoDes3Score + seoDescriptionPrimaryKeyScore + seoDescriptionSecondaryKeyScore);

    //heading
    let seoHeading1Score = 0;
    let seoHeading2Score = 0;
    let seoHeading3Score = 0;
    let seoHeadingPrimaryKeyScore = 0;
    let seoHeadingSecondaryKeyScore = 0;
    let h1Tags = document.querySelectorAll('h1');
    let h2Tags = document.querySelectorAll('h2');
    if (wordCountTitle > 5 && h1Tags) seoHeading1Score = 2;
    let Heading1 = document.getElementById("heading-1");
    Heading1.value = seoHeading1Score;

    let contentH1 = document.querySelector('h1'); 
    if (title !== contentH1) seoHeading2Score = 2; 
    let Heading2 = document.getElementById("heading-2");
    Heading2.value = seoHeading2Score;

    if (wordCountContent > 0 && h2Tags) seoHeading3Score = 2;
    let Heading3 = document.getElementById("heading-3");
    Heading3.value = seoHeading3Score;

    if  ((title == contentH1)) seoHeadingScore = 0;
    
    if (countKeywordMatches(heading, primaryKeyword) > 0 && seoHeadingPrimaryKeyScore === 0) seoHeadingPrimaryKeyScore += 10;
    let Heading4 = document.getElementById("heading-4");
    Heading4.value = seoHeadingPrimaryKeyScore;

    if (countKeywordMatches(heading, secondaryKeyword) > 0 && seoHeadingSecondaryKeyScore === 0) seoHeadingSecondaryKeyScore += 3; 
    let Heading5 = document.getElementById("heading-5");
    Heading5.value = seoHeadingSecondaryKeyScore;

    const totalHeadingScore = (seoHeading1Score + seoHeading2Score + seoHeading3Score + seoHeadingPrimaryKeyScore + seoHeadingSecondaryKeyScore);

    // Image
    let seoImga = 0;
    let seoAltImga = 0;
    let seoPrimaryImgaScore = 0;
    let seoSecondaryImgaScore = 0;
    let seoImgaCaptionScore = 0;
    let imgCount = (content.match(/<img[^>]*>/g) || []).length;
    if(imgCount > 0) seoImga += 1;
    let Img1 = document.getElementById("img-1");
    Img1.value = seoImga;

    let altImga = content.match(/alt=["']([^"']+)["']/);
    if (altImga) {
        if(altImga[1]) {
            let altText = altImga[1];
            let altWords = altText.split(/\s+/);
            let altWordsStr = altWords.join(" ");
            let altWordsCount = countWords(altWordsStr);
            if(altWordsCount > 5) seoAltImga += 1;
            let Img2 = document.getElementById("img-2");
            Img2.value = seoAltImga;
        }
        let altImg = altImga.join('');
        if(countKeywordMatches(altImg, primaryKeyword) > 0 && seoPrimaryImgaScore === 0) seoPrimaryImgaScore +=3;
        let Img3 = document.getElementById("img-3");
            Img3.value = seoPrimaryImgaScore;

        if(countKeywordMatches(altImg, secondaryKeyword) > 0 && seoSecondaryImgaScore === 0) seoSecondaryImgaScore +=2;
        let Img4 = document.getElementById("img-4");
            Img4.value = seoSecondaryImgaScore;

        let figures = document.querySelectorAll('figure');
        let nextElement = figures.nextElementSibling;
        if (nextElement && nextElement.tagName === 'P') {
            let paragraphText = nextElement.textContent.trim();
            if(paragraphText) seoImgaCaptionScore +=2;
            let Img5 = document.getElementById("img-5");
            Img5.value = seoImgaCaptionScore;
        }
    }
    
    const totalImga = (seoImga + seoAltImga + seoPrimaryImgaScore + seoSecondaryImgaScore + seoImgaCaptionScore);

    //content
    let seoContent = 0;
    let seoContent2 = 0;
    let seoContentPrimaryKeyScore = 0;
    let seoContentSecondaryKeyScore = 0;
    let seoContentPrimaryKeyDensityScore = 0;
    let seoContentSecondaryKeyDensityScore = 0;
    let seoPriSecScore = 0;
    let words = content.replace(/<\/?[^>]+(>|$)/g, "");
    let textSplit = words.split(' ');
    let first100Text = textSplit.slice(0, 100);
    let end100Text = textSplit.slice(-100);
    let stylefirst100Text = first100Text.join('');
    let styleend100Text = end100Text.join('');
    let keywordCountFirst = (stylefirst100Text.match(new RegExp(primaryKeyword, 'gi')) || []).length;
    let keywordCountEnd = (styleend100Text.match(new RegExp(primaryKeyword, 'gi')) || []).length;
    if(keywordCountFirst > 0 && keywordCountEnd > 0) seoContent += 4;
    let Content1 = document.getElementById("content-1");
        Content1.value = seoContent;
    if(wordCountContent >= 300 ) seoContent2 += 3;
    let Content2 = document.getElementById("content-2");
        Content2.value = seoContent2;
    let first30Text = textSplit.slice(0, 30);
    let stylefirst30Text = first30Text.join('');
    let keywordCountFirst30Text = (stylefirst30Text.match(new RegExp(primaryKeyword, 'gi')) || []).length;
    if(keywordCountFirst30Text > 0) seoContentPrimaryKeyScore += 5;
    let Content3 = document.getElementById("content-3");
        Content3.value = seoContentPrimaryKeyScore;
    let keySecondaryCountFirst30Text = (stylefirst30Text.match(new RegExp(secondaryKeyword, 'gi')) || []).length;
    if(keySecondaryCountFirst30Text > 0) seoContentSecondaryKeyScore += 3;
    let Content4 = document.getElementById("content-4");
        Content4.value = seoContentSecondaryKeyScore;
    let keyPrimaryContent = (content.match(new RegExp(primaryKeyword, 'gi')) || []).length;
    let keywordDensity = (keyPrimaryContent / wordCountContent)*100;
    if(keywordDensity >= 0.7) seoContentPrimaryKeyDensityScore += 5;
    let Content5 = document.getElementById("content-5");
        Content5.value = seoContentPrimaryKeyDensityScore;
    let keySecondaryContent = (content.match(new RegExp(secondaryKeyword, 'gi')) || []).length;
    let keySecondaryDensity = (keySecondaryContent / wordCountContent) * 100;
    if(keywordDensity >= 0.2) seoContentSecondaryKeyDensityScore += 3;
    let Content6 = document.getElementById("content-6");
        Content6.value = seoContentSecondaryKeyDensityScore;
    let totalDensity = (keywordDensity + keySecondaryDensity);
    if(totalDensity <5) seoPriSecScore += 3;
    let Content7 = document.getElementById("content-7");
        Content7.value = seoPriSecScore;

    const totalContent = (seoContent + seoContent2 + seoContentPrimaryKeyScore + seoContentSecondaryKeyScore + seoContentPrimaryKeyDensityScore + seoContentSecondaryKeyDensityScore + seoPriSecScore);

    //internal Links
    let seoInternalLinkScore = 0;
    let seoInternalLinkTabScore = 0;
    let links = document.querySelectorAll('.ck-editor a');
    let categories = [];
    links.forEach(link => {
        let href = link.getAttribute('href');
        if (href && href.startsWith(window.location.origin)) {
            let slugMatch = href.match(/\/([a-zA-Z0-9\-]+)\/[^\/]+\/[^\/]+$/); 
            if (slugMatch) {
                let slug = slugMatch[1]; 
                if (!categories[slug]) {
                    categories[slug] = 0;
                }
                categories[slug]++;
            }
        }
    });
    if (categories[slug] > 2) seoInternalLinkScore = 3;
    let internal = document.getElementById("internal-1");
    internal.value = seoInternalLinkScore;

    let linksTab = document.querySelectorAll('.ck-editor a');
    linksTab.forEach(linksTabNew => {
        let href = linksTabNew.getAttribute('href');
        let target = linksTabNew.getAttribute('target');
        if (target === '_blank') seoInternalLinkTabScore = 2;
        let internalTab = document.getElementById("internal-2");
            internalTab.value = seoInternalLinkTabScore;
    });
    const totalInternalLink = (seoInternalLinkScore + seoInternalLinkTabScore);

    // link out
    let seoLinkOutScore = 0;
    let linkOuts = document.querySelectorAll('.ck-editor a');
    let linkOutCount = 0;
    // Lặp qua tất cả các liên kết
    linkOuts.forEach(link => {
        let href = link.getAttribute('href');

        // Kiểm tra nếu liên kết là link out (liên kết đến domain khác)
        if (href && !href.startsWith(window.location.origin)) {
            linkOutCount++;
        }
    });
    if(linkOutCount > 2) seoLinkOutScore += 3;
    const totalLinkOut = seoLinkOutScore;

    // Tổng điểm của bài viết
    const totalScore = (totalTitleScore + totalDescriptionScore + totalImga + totalHeadingScore + totalContent + totalInternalLink + totalLinkOut);

     // Hiển thị kết quả
     const resultDiv = document.getElementById('title-score');
     resultDiv.value = totalTitleScore;
     const resultDivDescription = document.getElementById('description-score');
     resultDivDescription.value = totalDescriptionScore;
     const resultHeading = document.getElementById('heading-score');
     resultHeading.value = totalHeadingScore;
     const resultImga = document.getElementById('images');
     resultImga.value = totalImga;
     const resultC = document.getElementById('content-score');
     resultC.value = totalContent;
     const resultInternalLink = document.getElementById('internalLink');
     resultInternalLink.value = totalInternalLink;
     const resultLinkOut = document.getElementById('externalLink');
     resultLinkOut.value = totalLinkOut;
     const resultTotalScore = document.getElementById('total-score');
     resultTotalScore.value = totalScore;
}
