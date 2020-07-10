const intensity = 0.2;

new hoverEffect({
  parent: document.querySelector('.services__item_1'),
  image1: 'img/service1.jpg',
  image2: 'img/service1-end.jpg',
  displacementImage: 'img/displacement-image.png',
  intensity: intensity
});
new hoverEffect({
  parent: document.querySelector('.services__item_4'),
  image1: 'img/service2.jpg',
  image2: 'img/service2-end.jpg',
  displacementImage: 'img/displacement-image.png',
  intensity: intensity
});
new hoverEffect({
  parent: document.querySelector('.services__item_5'),
  image1: 'img/service3.jpg',
  image2: 'img/service3-end.jpg',
  displacementImage: 'img/displacement-image.png',
  intensity: intensity
});
new hoverEffect({
  parent: document.querySelector('.services__item_8'),
  image1: 'img/service4.jpg',
  image2: 'img/service4-end.jpg',
  displacementImage: 'img/displacement-image.png',
  intensity: intensity
});
new hoverEffect({
  parent: document.querySelector('.services__item_9'),
  image1: 'img/service5.jpg',
  image2: 'img/service5-end.jpg',
  displacementImage: 'img/displacement-image.png',
  intensity: intensity
});

$('.services__item-link').click(function(e) {
  const parent = this.parentElement;
  let sibling = parent.nextElementSibling;
  if (!sibling)
    sibling = parent.previousElementSibling;
  parent.style.display = 'none';
  sibling.style.display = 'block';
});