'use strict';


const container = document.querySelector('#menuContainer');
const cmsConteudo = document.querySelectorAll('.cmsConteudo');

const menuItems = [
    { 'id': 'admConteudo', 'url': '../images/conteudo.png' },
    { 'id': 'admFaleConosco', 'url': '../images/faleconosco.png' },
    { 'id': 'admProdutos', 'url': '../images/produtos.png' },
    { 'id': 'contas', 'url': '../images/usuario.png' },
];

const loadItems = (menuItems, container) => {
    menuItems.forEach(menuItems => {
        container.innerHTML += `
            <div class='menuItems'>
                <img src="${menuItems.url}" id='${menuItems.id}'>
            </div>
        `
    });
}

loadItems(menuItems, container);


const menu = document.querySelectorAll('.menuItems');

const clickMenu = (event) => {
    if (event.target.id == 'admFaleConosco') {
        removeAll();
        cmsConteudo[0].classList.add('visualizar');
    }
    if (event.target.id == 'contas') {
        removeAll();
        cmsConteudo[1].classList.add('visualizar');
    }
    if (event.target.id == 'produtos') {
        removeAll();
        cmsConteudo[2].classList.add('visualizar');
    }
    if (event.target.id == 'admConteudo') {
        removeAll();
        cmsConteudo[3].classList.add('visualizar');
    }
}


const removeAll = (cmsConteudo) => {
    cmsConteudo = document.querySelectorAll('.cmsConteudo');

    for (let i = 0; i <= cmsConteudo.length - 1; i++) {
        if (cmsConteudo[i].classList.contains('visualizar')) {
            cmsConteudo[i].classList.remove('visualizar');
            cmsConteudo[i].classList.add('ocultar');
            console.log(i);
        }
    }
}


container.addEventListener('click', clickMenu);