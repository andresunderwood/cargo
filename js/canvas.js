  const canvas = document.getElementById('canvas');
  const ctx = canvas.getContext('2d');
  const img = new Image();
  
  img.src = './images/points-tablet.png';
  
  img.onload = function() {
    ctx.drawImage(img, 0, 0);
    
    // Устанавливаем цвет замены
    ctx.globalCompositeOperation = 'source-in';
    ctx.fillStyle = '#e1ff03'; // Ваш точный цвет
    ctx.fillRect(0, 0, canvas.width, canvas.height);
};