    <footer class="bg-dark text-center text-lg-start">
      <div class="text-center text-light p-3">
      	<a class="text-light" href="/"><?=TITLE?></a>
        ©2011-<?= date('Y') ?> by wGrab
      </div>
    </footer>
    <script src="<?=DOMAIN?>/html/assets/js/bootstrap.bundle.min.js"></script>
    <script>
    document.querySelectorAll('#check_eps').forEach(v => {
      v.addEventListener('click', () => {
        localStorage.setItem('w'+sha1(v.href),'true');
      });

      if(localStorage.getItem('w'+sha1(v.href)) == 'true'){
        if(v.childNodes[1].localName == "span"){
          // console.log('>> childNodes 1 <<');
          v.childNodes[1].textContent = 'Watched';
        }
        else if(v.childNodes[5].localName == 'p'){
          // console.log('>> childNodes 5 <<');
          v.childNodes[5].textContent = 'Watched';
          }
        }
    });
    </script>
  </body>
</html>
