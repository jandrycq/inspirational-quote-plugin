document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('new-quote').addEventListener('click', function () {
        fetch(iq_ajax.ajaxurl + '?action=get_quote')
            .then(response => response.json())
            .then(data => {
                document.getElementById('quote-container').innerText = `"${data}"`;
            });
    });
});
