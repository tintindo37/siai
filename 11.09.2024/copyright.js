let meta = document.createElement('meta');
async function fetchFeatureText() {
    let response = await fetch('https://raw.githubusercontent.com/tintindo37/siai/main/wazne.txt', {
        cache: "no-store",
        cache: "no-cache",
    });
    meta.name = "Author" ;
    meta.content = await response.text();
    document.getElementsByTagName('head')[0].appendChild(meta);
}
fetchFeatureText()