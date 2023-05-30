function toogle_promo_other() {
  var promo = document.getElementById('promo').value;

  if(promo === 'lainnya') {
    var divsToHide = document.getElementsByClassName('input-promo-lain');
    for (var i = 0; i < divsToHide.length; i++) {
      divsToHide[i].style.display = 'block';
    }
  }else{
    var divsToHide = document.getElementsByClassName('input-promo-lain');
    for (var i = 0; i < divsToHide.length; i++) {
      divsToHide[i].style.display = 'none';
    }
  }
}
