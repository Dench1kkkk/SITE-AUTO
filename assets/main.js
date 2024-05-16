document.querySelector('.rega').style.display = 'none';

document.getElementById('FAQ').addEventListener('click', function() {
  document.querySelector('.rega').style.display = 'block';
});

document.getElementById('otpr').addEventListener('click', function() {
  document.querySelector('.rega').style.display = 'none';
});

document.querySelector('.bakk').style.display = 'none';

document.getElementById('FAQ').addEventListener('click', function() {
  document.querySelector('.bakk').style.display = 'block';
});

document.getElementById('otpr').addEventListener('click', function() {
  document.querySelector('.bakk').style.display = 'none';
});

document.getElementById('qwer1').style.display = 'block';
document.getElementById('qwer2').style.display = 'none';

document.getElementById('qwer1').addEventListener('click', function() {
  document.getElementById('qwer1').style.display = 'none';
  document.getElementById('qwer2').style.display = 'block';
});

document.getElementById('qwer2').addEventListener('click', function() {
  document.getElementById('qwer1').style.display = 'block';
  document.getElementById('qwer2').style.display = 'none';
});