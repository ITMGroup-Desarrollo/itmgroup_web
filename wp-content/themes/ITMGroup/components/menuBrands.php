<?php
global $ports, $realState, $hospitality;
?>

<div id="brands">
  <div class="brand-group">
    <p class="brand-title">
      <?php echo (Lang\getLang() == 'en') ? 'Cruise Ports' : 'Puertos de Crucero'; ?>
      <svg class="icon-arrow" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
        <path d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path>
      </svg>
    </p>
    <?php foreach ($ports as $port): ?>
      <p class="brand-link"><a href="<?= $port['href'] ?>"><?= $port['title'] ?></a></p>
    <?php endforeach; ?>
  </div>

  <div class="brand-group">
    <p class="brand-title">
      <?php echo (Lang\getLang() == 'en') ? 'Real State' : 'Desarrollo Inmobiliario'; ?>
      <svg class="icon-arrow" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
        <path d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path>
      </svg>
    </p>
    <?php foreach ($realState as $real): ?>
      <p class="brand-link"><a href="<?= $real['href'] ?>"><?= $real['title'] ?></a></p>
    <?php endforeach; ?>
  </div>

  <div class="brand-group">
    <p class="brand-title">
      <?php echo (Lang\getLang() == 'en') ? 'Hospitality' : 'Hospitalidad'; ?>
      <svg class="icon-arrow" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
        <path d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path>
      </svg>
    </p>
    <?php foreach ($hospitality as $host): ?>
      <p class="brand-link"><a href="<?= $host['href'] ?>"><?= $host['title'] ?></a></p>
    <?php endforeach; ?>
  </div>
</div>

<style type="text/css">
  #brands {
    width: 100%;
    margin-bottom: 30px;
  }

  #brands p {
    text-align: end;
    justify-self: end;
    text-align: right;
    color: #fff;
  }

  .option.brands-mobile {
    margin-bottom: 0 !important;
  }

  .brands-mobile:not(:hover) #brands {
    display: none !important;
  }

  .brand-group {
    position: relative;
    margin-bottom: 10px;
    display: grid;
    justify-content: end;
  }

  .brand-title {
    font-size: 18px;
    cursor: pointer;
    color: #000;
    margin: 0;
    margin-bottom: 5px;
    margin-top: 5px;
    display: flex;
    align-items: center;
    justify-content: end;
  }

  .brand-title .icon-arrow {
    transform: rotate(0deg);
    transition: 0.3s;
    width: 15px;
    height: 15px;
    fill: white;
  }

  .brand-link {
    display: none;
    font-size: 14px;
    color: #000;
    text-align: end;
    padding: 2px 0;
    opacity: 0;
    transition: opacity 0.3s ease, transform 0.3s ease;
    transform: translateY(-10px);
    margin-bottom: 7px;
  }

  .brand-group.active .brand-link {
    display: block;
    opacity: 1;
    transform: translateY(0);
  }

  .brand-group.active .icon-arrow {
    transform: rotate(180deg);
  }

  .brand-group.active {
    margin-bottom: 20px;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var brandGroups = document.querySelectorAll('.brand-group');

    brandGroups.forEach(function(group) {
      var title = group.querySelector('.brand-title');
      title.addEventListener('click', function() {
        brandGroups.forEach(function(otherGroup) {
          if (otherGroup !== group) {
            otherGroup.classList.remove('active');
          }
        });
        group.classList.toggle('active');
      });
    });
  });
</script>