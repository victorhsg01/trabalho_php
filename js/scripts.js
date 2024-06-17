
const menuItemsContainer = document.querySelector('.menu-items');

const pratos = [
  { nome: 'Macarrão ao molho', descricao: 'Macarrão deliciosamente preparado com um molho especial.', preco: 'R$ 25,00', imagem: 'https://i.pinimg.com/originals/8d/75/b8/8d75b80f3ef55aace1a04ee24ace09d2.jpg' },
  { nome: 'Strogonoff de Frango', descricao: 'Strogonoff cremoso com pedaços suculentos de frango.', preco: 'R$ 30,00', imagem: 'https://cdn.deliway.com.br/blog/base/675/956/759/strogonoff.jpg' },
  { nome: 'Camarão Grelhado', descricao: 'Camarão grelhado com molho de ervas e acompanhamentos.', preco: 'R$ 35,00', imagem: 'https://i.pinimg.com/736x/b7/6f/a0/b76fa07b5c69fdc3b6d2e45990ec4d09.jpg' },
  { nome: 'Risoto de Funghi', descricao: 'Risoto cremoso de funghi com cogumelos frescos.', preco: 'R$ 28,00', imagem: 'https://i.pinimg.com/564x/0a/be/93/0abe9357f9c3cf0da01de30cb8fecd57.jpg' },
  { nome: 'Frango Xadrez', descricao: 'Frango Xadrez com legumes frescos e molho agridoce.', preco: 'R$ 27,00', imagem: 'https://i.pinimg.com/564x/9f/e8/e5/9fe8e5ed69c773a53baf080d9c4a0dc5.jpg' },
  { nome: 'Prato 6', descricao: 'Descrição do prato 6.', preco: 'R$ 170,00', imagem: 'https://i.pinimg.com/564x/5b/44/fb/5b44fbfda569d1d8d2d872d6f199365c.jpg' },
  { nome: 'Prato 7', descricao: 'Descrição do prato 7.', preco: 'R$ 210,00', imagem: 'https://i.pinimg.com/564x/f2/fe/e0/f2fee0cf046bc3591c006539c9d27c27.jpg' },
  { nome: 'Prato 8', descricao: 'Descrição do prato 8.', preco: 'R$ 190,00', imagem: 'https://via.placeholder.com/150' },
  { nome: 'Prato 9', descricao: 'Descrição do prato 9.', preco: 'R$ 240,00', imagem: 'https://via.placeholder.com/150' },
  { nome: 'Prato 10', descricao: 'Descrição do prato 10.', preco: 'R$ 160,00', imagem: 'https://via.placeholder.com/150' },
  { nome: 'Prato 11', descricao: 'Descrição do prato 11.', preco: 'R$ 270,00', imagem: 'https://via.placeholder.com/150' },
  { nome: 'Prato 12', descricao: 'Descrição do prato 12.', preco: 'R$ 300,00', imagem: 'https://via.placeholder.com/150' },
  { nome: 'Prato 13', descricao: 'Descrição do prato 13.', preco: 'R$ 230,00', imagem: 'https://via.placeholder.com/150' },
  { nome: 'Prato 14', descricao: 'Descrição do prato 14.', preco: 'R$ 280,00', imagem: 'https://via.placeholder.com/150' },
  { nome: 'Prato 15', descricao: 'Descrição do prato 15.', preco: 'R$ 260,00', imagem: 'https://via.placeholder.com/150' }
];

pratos.forEach(prato => {
  const menuItem = document.createElement('div');
  menuItem.classList.add('menu-item');

  menuItem.innerHTML = `
    <img src="${prato.imagem}" alt="${prato.nome}">
    <h2>${prato.nome}</h2>
    <p>${prato.descricao}</p>
    <span>${prato.preco}</span>
  `;

  menuItemsContainer.appendChild(menuItem);
});


//carrossel