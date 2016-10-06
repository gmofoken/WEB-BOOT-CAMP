var btn = document.getElementById("btn");
btn.onclick = function () {
    var value = prompt('New TODO');
    var list = document.getElementById('ft_list');
    var div = document.createElement('div');
    div.onclick = removeChild;
    div.innerHTML = value;
    if (value != "")
        list.insertBefore(div, list.firstChild);
}

function removeChild(e){
    var conf = confirm ("Are you sure you want to remove this item?");
    if (conf == true)
        e.target.parentElement.removeChild(e.target);
}
