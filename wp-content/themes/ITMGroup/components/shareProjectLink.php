<a class="icon share-text wow fadeInRight" aria-label="link" target="_blank" rel="nofollow" href="<?= $args['href']; ?>">
  <img mnr-src="<?= Util\root() ?>/assets/real-state/link-icon-52x52.png" width="100%" height="100%" alt="<?= $args['alt']; ?>" style="height: 26px; width:26px; display: flex;">
  <b style="padding-left:4px">
    <?php if(Lang\getLang() == 'en'){ ?>
      Visit project
    <?php } else { ?>
      Visitar proyecto
    <?php } ?>
  </b>
</a>

<style type="text/css">
  .share-text {
    color: var(--azulOscuro);
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: end;
    font-size: 1.5rem;
    text-decoration: underline;
    padding: 8px 0;
  }
  
  .share-text b {
    font-family: 'Nexa-Book';
  }

  @media screen and (max-width: 500px){
    .share-text {
      align-items: center;
      justify-content: center;
      width: 100%;
    }
  }
</style>