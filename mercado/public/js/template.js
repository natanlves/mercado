function toggleMenu() {
    var menu = document.getElementById("menu");

    if (menu.classList.contains("open")) {
        menu.style.maxHeight = "0px";  // Fecha o menu suavemente
        menu.style.opacity = "0";
        setTimeout(() => {
            menu.classList.remove("open");
        }, 300); // Aguarda a transição antes de remover a classe
    } else {
        menu.classList.add("open");
        menu.style.maxHeight = menu.scrollHeight + "px"; // Ajusta a altura conforme o conteúdo
        menu.style.opacity = "1";
    }
}
