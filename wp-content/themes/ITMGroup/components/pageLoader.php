<div id="pageLoader" class="loadSpinnerHolder">
    <div class="holder">
        <!-- <div class="box2"></div>
        <div class="box1"></div> -->
        <img src="<?= Util\root() ?>/assets/isotipo.png" alt="">
    </div>

</div>

<style>
    #pageLoader {
        background-color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        z-index: 999999;
        opacity: 1;
        transition: opacity 0.8s;
    }

    #pageLoader .holder {
        position: relative;
        animation: scaleOut 3s ease-in-out infinite;
        width: 120px;
        height: 120px;
    }

    #pageLoader .box1 {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto;
        border: solid 11px var(--azulClaro);
        z-index: 9;
        width: 70px;
        height: 70px;
    }

    #pageLoader .box2 {
        width: 54px;
        height: 54px;
        position: absolute;
        right: 6px;
        top: 5px;
        margin: auto;
        background-color: var(--azulOscuro);
        z-index: 8;
    }

    #pageLoader.fade {
        opacity: 0;
    }

    #pageLoader.load {
        display: none;
    }


    @keyframes scaleOut {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(0.9);
        }

        100% {
            transform: scale(1);
        }
    }
</style>