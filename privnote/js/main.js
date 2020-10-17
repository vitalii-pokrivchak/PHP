function copyLink(node) {
    let input = document.getElementById(node);
    if (input.nodeName !== "INPUT") {
        console.error('node must be Input Element');
    }
    input.select();
    input.setSelectionRange(0, 99999);
    document.execCommand('copy');
}