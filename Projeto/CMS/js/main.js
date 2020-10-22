const menu = document.querySelectorAll('.menuItems');
const container = document.querySelector('#menu');
const cmsConteudo = document.querySelectorAll('.cmsConteudo');

// const menuItems = [
//     { 'id': 'admConteudo', 'url': '../images/conteudo.png' },
//     { 'id': 'admFaleConosco', 'url': '../images/faleconosco.png' },
//     { 'id': 'admProdutos', 'url': '../images/produtos.png' },
//     { 'id': 'contas', 'url': '../images/usuario.png' },
// ];

// const loadItems = (menuItems, container) => {
//     menuItems.forEach(menuItems => {
//         container.innerHTML += `
//             <div class="menuItems"' id='${menuItems.id}'>
//                 <img src="${menuItems.url}">
//             </div>
//         `
//     });
// }

loadItems(menuItems, container);


const changeVisibility = (container, elemento) => {
    let classes = container.classList;
    if (classes[1] == 'visualizar') {
        container[elemento].classList.replace('visualizar', 'ocultar')
    } else {
        container[elemento].classList.replace('ocultar', 'visualizar')
    }
}