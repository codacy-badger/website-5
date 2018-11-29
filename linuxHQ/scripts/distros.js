// var for where to put the output
var distroResults = document.getElementById("distroSection");

var myPage = "/linuxHQ/distro/";
var DWPage = "https://distrowatch.com/";
var distroGraphics = "/linuxHQ/graphics/distros/";


function displayDistroOutput(currentDistroName, currentDistroIcon, currentDistroTitle, currentDistroHomepage, currentDistroDownload, currentDistroForum, currentDistroFeaturesDesktops, currentDistroSimilarDistros, currentDistroTargetAudience, currentDistroSoftwareType) {

    // Template Literal for output
    // Download and Forum links below are wrong 
    const currentDistroInfoOutput = `

            <div class="card">
                <div class="card-title m-0 p-2 bg-primary text-white">
                    <div class="row pl-3"> 
                        <img src="${distroGraphics}${currentDistroIcon}" alt="${currentDistroTitle} icon" width="48px" height="48px">
                        <div class="h2 font-weight-bold ">${currentDistroTitle}</div>
                    </div>
                </div>
            </div>
            
            <div class="card-text">
                <span class="font-weight-bold">Homepage: </span>
                <a href="${currentDistroHomepage}" target="_blank">${currentDistroTitle}'s Homepage</a><br/>
                
                <span class="font-weight-bold">Download: </span>
                <a href="${currentDistroDownload}" target="_blank">${currentDistroTitle}'s Download Page</a><br/>
                
                <span class="font-weight-bold">Forums:</span>
                <a href="${currentDistroForum}" target="_blank">${currentDistroTitle}'s Forum</a><br/><br/>
                
                <div class="font-weight-bold">Distrowatch Page: </div>
                <a href="${DWPage}${currentDistroName}" blank="_blank">${currentDistroTitle} Distrowatch Link </a>
                <br/>

                <div class="font-weight-bold">Target Audience: </div> ${currentDistroTargetAudience}
                
                <div class="font-weight-bold">Featured Desktops: </div> ${currentDistroFeaturesDesktops}
                
                <div class="font-weight-bold">Similar Distros: </div> ${currentDistroSimilarDistros}
                
                <div class="font-weight-bold">Software Type: </div> ${currentDistroSoftwareType}
                
                <br/><br/>
            
            
            <span class="font-weight-bold h4">Youtube Playlists</span><br/>
            <div class="row"> 
                <div class="col-6">
                    <span class="font-weight-bold">Youtube Reviews and Comment Playlist: </span>
                </div>
                <div class="col-6">
                    <span class="font-weight-bold">Youtube Tweaks and Tips Playlist</span>
                </div>
            </div>
            </div>
        </div>
        <hr />
        `;


    distroResults.insertAdjacentHTML("beforeend", currentDistroInfoOutput);
};

// "main" function
function getDistroData(data, $localDistroName) {
    jsonURL = "http://xmetal.x10.mx/linuxHQ/json/distros.json";

    // Get JSON Data
    $.getJSON(jsonURL, function(data) {

        $.each(data, function(key, value) {

            for (var distroFamily = 0; distroFamily < value.length; distroFamily++) {

                //////////////////////////////////////////////////////////////////////////
                // DECLARE VARIABLES
                var iconPath

                // Name/Title
                var currentDistroName = value[distroFamily].distroName;
                var currentDistroTitle = value[distroFamily].distroTitle;

                // graphics
                var currentDistroIcon = value[distroFamily].graphics.iconURL;

                // moreInfo
                var currentDistroFeaturesDesktops = value[distroFamily].moreinfo.desktops;
                var currentDistroSimilarDistros = value[distroFamily].moreinfo.similar;
                var currentDistroTargetAudience = value[distroFamily].moreinfo.target;

                // I think i meant "rolling, ...etc for this var"
                var currentDistroSoftwareType = value[distroFamily].moreinfo.software;

                // Website
                var currentDistroHomepage = value[distroFamily].website.homepage;
                var currentDistroDownload = value[distroFamily].website.download;
                var currentDistroForum = value[distroFamily].website.forum;

                ////////////////////////////////////////////////////////////////////////////

                if (localDistroName == currentDistroName) {
                    displayDistroOutput(currentDistroName, currentDistroIcon, currentDistroTitle, currentDistroHomepage, currentDistroDownload, currentDistroForum, currentDistroFeaturesDesktops, currentDistroSimilarDistros, currentDistroTargetAudience, currentDistroSoftwareType);
                }

            }

        }); // Ends .each loop 

    }); // ends getJSON loop
}