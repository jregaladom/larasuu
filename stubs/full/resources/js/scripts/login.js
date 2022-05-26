function alertDiv(messaje, type) {
    let messageHead = "";
    if (type = 'warning') {
        messageHead = '¡Atención!'
    } else if (type = 'warning') {
        messageHead = 'Se produjo un error inesperado.'
    }
    var wrapper = document.createElement('div')
    wrapper.innerHTML = `<div class="alert alert-${type} alert-dismissible fade show" role="alert">
                            <h4 class="alert-heading">${messageHead}</h4>
                            <div class="alert-body">
                                ${messaje}
                            </div>
                            </div>`;
    var alertPlaceholder = document.getElementById('alertPlaceholder');
    alertPlaceholder.innerHTML = '';
    alertPlaceholder.append(wrapper);
}