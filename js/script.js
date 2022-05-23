document.getElementById("save").onclick = function(event) {
    var name = document.getElementById("name").value;
    var text = document.getElementById("new").value;
    if (text == "" || name == "") {
        alert("Поля заполнены не полностью! Заполните.");
    }
    if (name.length > 50) {
        alert("Заголовок слишком длинный!");
    }
}