let meta = document.createElement('meta');
async function fetchFeatureText() {
    let response = await fetch('https://raw.githubusercontent.com/tintindo37/siai/main/wazne.txt', {
        cache: "no-store",
        cache: "no-cache",
    });
    let text = await response.text();
    meta.name = "Author" ;
    meta.content = await text;
    document.getElementsByTagName('head')[0].appendChild(meta);
}
fetchFeatureText()