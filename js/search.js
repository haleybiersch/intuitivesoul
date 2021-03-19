var submitIcon = document.querySelector('.searchbox-icon');
var inputBox = document.querySelector('.searchbox-input');
var searchbox = document.querySelector('.searchbox');
var isOpen = false;

submitIcon.addEventListener('click', () => {
    if(isOpen == false) {
        searchbox.classList.add('searchbox-open');
        inputBox.focus();
        isOpen = true;
    } else {
        searchbox.classList.remove('searchbox-open');
        inputBox.blur();
        isOpen = false;
    }
} );
submitIcon.addEventListener('mouseup', () => {
    return false;
});

submitIcon.addEventListener('mousedown', () => {
    return false;
});

document.addEventListener('mouseup', () => {
    if(isOpen == true) {
        submitIcon.style.display = "block";

    }
});

inputBox.addEventListener('keyup', () => {
    var inputval = inputBox.value;
    inputval.trim().length;
    if (inputval !== "") {
        submitIcon.style.display = "none";
    } else {
        inputBox.value = "";
        submitIcon.style.display = "block";
    }

});
