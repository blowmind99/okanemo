function showLoading() {
    $.blockUI({
        message : '<div class="d-flex align-items-center justify-content-center"><em class="icon ni ni-loader me-2"></em><p>sedang mengambil data</p></div>',
        css		: {
            backgroundColor: '#fff',
            color: '#333',
            border: 'none',
            padding: 10,
        }
    });
}

function hideLoading() {
    $.unblockUI();
}

window.showLoading  = showLoading;
window.hideLoading  = hideLoading;


