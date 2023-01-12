const mainContainer = document.querySelector('.mainContainer');
const innerContainer = document.querySelector('.innerContainer');
const boxContainer = document.querySelectorAll('.boxContainer');

// const gap = 10;
let pressed = false;
let stratx;
let x;

const boxStyles = {
  boxGap: 10,
  boxWidth: 350,
}
innerContainer.style.setProperty('--gap', `${boxStyles.boxGap}px`);
innerContainer.style.setProperty('--boxWidth', `${boxStyles.boxWidth}px`);

let totalWidth = 0;
boxContainer.forEach(box => {
   totalWidth += box.offsetWidth;
   innerContainer.style.width = `${totalWidth + (boxContainer.length - 1) * boxStyles.boxGap}px`;
})

mainContainer.addEventListener('mousedown', (e) => {
   pressed = true;
   startx = e.offsetX - innerContainer.offsetLeft;
   mainContainer.style.cursor = 'grabbing'
});
mainContainer.addEventListener('mouseenter', () => mainContainer.style.cursor = 'grab');
mainContainer.addEventListener('mouseup', () => mainContainer.style.cursor = 'grab');
window.addEventListener('mouseup', () => pressed = false);

mainContainer.addEventListener('mousemove', e => {
   if(!pressed) return;
   e.preventDefault();   
   x = e.offsetX;
   innerContainer.style.left = `${x - startx}px`;
   checkBoundary();
});
const checkBoundary = () => {
   let outerBlock = mainContainer.getBoundingClientRect();
   let innerBlock = innerContainer.getBoundingClientRect();
   if(parseInt(innerContainer.style.left) > 0) innerContainer.style.left = 0;
   else if (innerBlock.right < outerBlock.right) innerContainer.style.left = `-${innerBlock.width - outerBlock.width}px`
}