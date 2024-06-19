<style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap");
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        list-style: none;
        font-family: "Inter", sans-serif;
    }

    a {
        text-decoration: none !important;
    }

    h1 {
        margin: 0;
    }

    p {
        margin: 0;
    }

    h2 {
        margin: 0;
    }

    h3 {
        margin: 0;
    }

    html {
        scroll-behavior: smooth;
        overflow-x: hidden;
    }

    :root {
        --font-size: 16px;
    }

    body {
        position: relative;
        z-index: 2;
        font-size: var(--font-size);
    }

    .bounce-enter-active {
        animation: bounce-in 0.5s;
        transform-origin: top left;
    }

    .bounce-leave-active {
        animation: bounce-in 0.5s reverse;
        transform-origin: top left;
    }

    @keyframes bounce-in {
        0% {
            transform: scale(0);
        }
        100% {
            transform: scale(1);
        }
    }
    .body-bg {
        background: #fff;
        width: 100%;
    }
    .body-bg.gray * {
        filter: grayscale(1);
    }
    .body-bg.dark * {
        filter: invert(1);
    }

    img {
        -o-object-position: center;
        object-position: center;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .news-image {
        min-width: 145px !important;
        height: 107px !important;
    }

    .my-container {
        width: 1200px;
        margin: 0 auto;
    }
    @media (max-width: 1280px) {
        .my-container {
            width: auto;
            margin: 0 40px;
        }
    }
    @media (max-width: 950px) {
        .my-container {
            margin: 0 40px;
        }
    }
    @media (max-width: 650px) {
        .my-container {
            margin: 0 18px;
        }
    }

    @media (max-width: 1150px) {
        .newsId {
            display: flex;
            flex-direction: column;
        }
    }

    #choose {
        visibility: hidden;
        font-size: 0;
    }

    .my-site-page {
        width: 1440px;
        margin: 0 auto;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: 100vh;
    }
    @media (max-width: 2000px) {
        .my-site-page {
            width: 100%;
        }
    }

    .unb {
        font-family: "Inter", sans-serif;
        color: #282e35;
    }

    .nav-text {
        color: #38434e;
        font-weight: 600;
    }
    .nav-text span {
        color: #0162A7;
    }

    .center {
        display: grid;
        place-items: center;
    }

    .my-btn {
        font-weight: 600;
        color: #fff !important;
        display: flex;
        width: -moz-max-content;
        width: max-content;
        align-items: center;
        cursor: pointer;
        justify-content: center;
        gap: 5px;
        padding: 12px 24px;
        background: #0162A7;
        border-radius: 12px;
        transition: 0.2s ease;
        border: none;
        outline: none;
        font-size: 16px;
        line-height: 23px;
        font-weight: 400;
        position: relative;
        overflow: hidden;
        min-width: 200px;
    }
    @media (max-width: 650px) {
        .my-btn {
            font-size: 14px;
            line-height: 18px;
        }
    }
    @media (max-width: 650px) {
        .my-btn {
            min-width: auto;
        }
    }
    .my-btn a {
        color: #fff;
    }
    .my-btn::after {
        content: "";
        width: 50px;
        height: 200px;
        background: rgba(254, 251, 251, 0.3176470588);
        position: absolute;
        transition: 0.2s ease;
        box-shadow: 2px 3px 100px 100px rgba(254, 251, 251, 0.3176470588);
        z-index: 1;
        top: -50px;
        left: -300%;
        animation: anim 3s ease infinite;
    }
    .my-btn svg {
        transition: 0.2s ease;
    }
    .my-btn svg path {
        fill: #fff;
    }
    .my-btn:hover {
        background: #037bd1;
    }
    .my-btn:hover::after {
        opacity: 0;
    }
    .my-btn:active {
        background: #037bd1;
    }
    .my-btn:active::after {
        opacity: 0;
    }

    .my-btn2 {
        font-weight: 600;
        color: #0162A7;
        display: flex;
        width: -moz-max-content;
        width: max-content;
        align-items: center;
        cursor: pointer;
        justify-content: center;
        gap: 5px;
        padding: 12px 24px;
        background: #fff;
        border-radius: 12px;
        transition: 0.2s ease;
        border: none;
        outline: none;
        font-size: 16px;
        line-height: 23px;
        font-weight: 400;
        position: relative;
        overflow: hidden;
        min-width: 200px;
    }
    @media (max-width: 650px) {
        .my-btn2 {
            font-size: 14px;
            line-height: 18px;
        }
    }
    @media (max-width: 650px) {
        .my-btn2 {
            min-width: auto;
        }
    }
    .my-btn2::after {
        content: "";
        width: 50px;
        height: 200px;
        background: rgba(254, 251, 251, 0.3176470588);
        position: absolute;
        transition: 0.2s ease;
        box-shadow: 2px 3px 100px 100px rgba(254, 251, 251, 0.3176470588);
        z-index: 1;
        top: -50px;
        left: -300%;
        animation: anim 3s ease infinite;
    }
    .my-btn2 svg {
        transition: 0.2s ease;
    }
    .my-btn2 svg path {
        fill: #0162A7;
    }
    .my-btn2:hover {
        background: rgba(255, 255, 255, 0.8705882353);
    }
    .my-btn2:hover::after {
        opacity: 0;
    }
    .my-btn2:active {
        background: rgba(255, 255, 255, 0.8705882353);
    }
    .my-btn2:active::after {
        opacity: 0;
    }

    .my-btn1 {
        font-weight: 600;
        color: #000 !important;
        display: flex;
        width: -moz-max-content;
        width: max-content;
        align-items: center;
        cursor: pointer;
        justify-content: center;
        gap: 5px;
        padding: 12px 24px;
        background: #f7f8fa;
        border-radius: 12px;
        transition: 0.2s ease;
        border: none;
        outline: none;
        font-size: 16px;
        line-height: 23px;
        font-weight: 400;
        position: relative;
        overflow: hidden;
        min-width: 180px;
    }
    @media (max-width: 650px) {
        .my-btn1 {
            font-size: 14px;
            line-height: 18px;
        }
    }
    @media (max-width: 650px) {
        .my-btn1 {
            min-width: auto;
        }
    }
    .my-btn1::after {
        content: "";
        width: 50px;
        height: 200px;
        background: rgba(254, 251, 251, 0.3176470588);
        position: absolute;
        transition: 0.2s ease;
        box-shadow: 2px 3px 100px 100px rgba(254, 251, 251, 0.3176470588);
        z-index: 1;
        top: -50px;
        left: -300%;
        animation: anim 3s ease infinite;
    }
    .my-btn1 svg {
        transition: 0.2s ease;
    }
    .my-btn1 svg path {
        fill: #000;
    }
    .my-btn1:hover {
        background: #eaeff8;
    }
    .my-btn1:hover::after {
        opacity: 0;
    }
    .my-btn1:active {
        background: #eaeff8;
    }
    .my-btn1:active::after {
        opacity: 0;
    }

    .danger-btn {
        font-weight: 600;
        color: #fff !important;
        display: flex;
        width: -moz-max-content;
        width: max-content;
        align-items: center;
        cursor: pointer;
        justify-content: center;
        gap: 5px;
        padding: 10px 10px;
        background: #e53131;
        border-radius: 12px;
        transition: 0.2s ease;
        border: none;
        outline: none;
        font-size: 16px;
        line-height: 23px;
        font-weight: 400;
        position: relative;
        overflow: hidden;
        min-width: 240px;
    }
    .danger-btn.my-account {
        min-width: 98px;
        border-radius: 500px;
    }
    @media (max-width: 650px) {
        .danger-btn {
            font-size: 14px;
            line-height: 18px;
        }
    }
    .danger-btn::after {
        content: "";
        width: 50px;
        height: 200px;
        background: rgba(254, 251, 251, 0.3176470588);
        position: absolute;
        transition: 0.2s ease;
        box-shadow: 2px 3px 100px 100px rgba(254, 251, 251, 0.3176470588);
        z-index: 1;
        top: -50px;
        left: -300%;
        animation: anim 3s ease infinite;
    }
    .danger-btn svg {
        transition: 0.2s ease;
    }
    .danger-btn svg path {
        fill: #fff;
    }
    .danger-btn:hover {
        background: #f14141;
    }
    .danger-btn:hover::after {
        opacity: 0;
    }
    .danger-btn:active {
        background: #f14141;
    }
    .danger-btn:active::after {
        opacity: 0;
    }

    @keyframes anim {
        0% {
            transform: rotate(40deg);
            display: flex;
        }
        100% {
            transform: rotate(40deg);
            left: 300%;
            display: none;
        }
    }
    .slider-btns {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .slider-btn {
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        border: 2px solid #f5fbfd;
        border-radius: 50%;
        outline: none;
        background: #0162A7;
    }

    .txt-95 {
        font-style: normal;
        font-weight: 600;
        font-size: 90px;
        line-height: 108px;
    }
    @media (max-width: 650px) {
        .txt-95 {
            font-size: 24px;
            line-height: 28px;
        }
    }

    .txt-60 {
        font-size: 60px;
        line-height: 64px;
        font-weight: 700;
    }
    @media (max-width: 650px) {
        .txt-60 {
            font-size: 24px;
            line-height: 28px;
        }
    }

    .txt-42 {
        font-style: normal;
        font-weight: 700;
        font-size: 2.625em;
        line-height: 58px;
        color: #ffffff;
    }
    @media (max-width: 650px) {
        .txt-42 {
            font-size: 1.8em;
            line-height: 38px;
        }
    }

    .txt-18 {
        font-size: 1.125em;
        line-height: 27px;
        font-weight: 400;
    }
    @media (max-width: 650px) {
        .txt-18 {
            font-size: 1em;
            line-height: 27px;
        }
    }

    .txt-21 {
        font-size: 21px;
        line-height: 27px;
        font-weight: 600;
    }
    @media (max-width: 650px) {
        .txt-21 {
            font-size: 18px;
        }
    }

    .txt-48 {
        font-style: normal;
        font-weight: 700;
        font-size: 48px;
        line-height: 58px;
    }
    @media (max-width: 650px) {
        .txt-48 {
            font-size: 20px;
            line-height: 24px;
        }
    }

    .txt-50 {
        font-size: 3.125em;
        line-height: 64px;
        font-weight: 700;
    }
    @media (max-width: 650px) {
        .txt-50 {
            font-size: 2em;
            line-height: 38px;
        }
    }

    .txt-33 {
        font-size: 2.063em;
        line-height: 47px;
        font-weight: 500;
    }
    @media (max-width: 650px) {
        .txt-33 {
            font-size: 1.5em;
            line-height: 33px;
        }
    }

    .txt-28 {
        font-weight: 600;
        font-size: 28px;
        line-height: 38px;
    }
    @media (max-width: 650px) {
        .txt-28 {
            font-size: 23px;
            line-height: 28px;
        }
    }

    .text-18 {
        font-size: 18px;
        line-height: 25.2px;
        font-weight: 400;
    }
    .text-18.text-18-bold {
        font-weight: 600;
    }

    .txt-16.bold {
        font-weight: 600;
        line-height: 140%;
    }

    .txt-24.bold {
        font-size: 1.5em;
        font-weight: 600;
        line-height: 140%;
    }

    .txt-16 {
        font-size: 1em;
        line-height: 23px;
        font-weight: 400;
    }
    @media (max-width: 650px) {
        .txt-16 {
            font-size: 0.9em;
            line-height: 18px;
        }
    }
    .txt-16.text-16-bold {
        font-weight: 600;
    }

    .txt-12 {
        font-size: 0.75em;
        line-height: 17px;
        font-weight: 500;
    }
    @media (max-width: 650px) {
        .txt-12 {
            font-size: 0.75em;
            line-height: 18px;
        }
    }

    .txt-14 {
        font-size: 0.875em;
        line-height: 19px;
        font-weight: 400;
    }
    .txt-14.about-phone {
        color: #38434E;
    }
    @media (max-width: 650px) {
        .txt-14 {
            font-size: 0.775em;
            line-height: 18px;
        }
    }

    .txt-19 {
        font-size: 19px;
        line-height: 23px;
        font-weight: 500;
    }
    @media (max-width: 650px) {
        .txt-19 {
            font-size: 16px;
            line-height: 18px;
        }
    }

    .txt-20 {
        font-size: 1.3em;
        line-height: 30px;
        font-weight: 700;
    }
    @media (max-width: 650px) {
        .txt-20 {
            font-size: 1em;
            line-height: 140% !important;
        }
    }

    .txt-28 {
        font-weight: 600;
        font-size: 28px;
        line-height: 38px;
    }
    @media (max-width: 650px) {
        .txt-28 {
            font-size: 23px;
            line-height: 28px;
        }
    }

    .my-input {
        width: 100%;
        border-radius: 12px;
        border: 1px solid rgba(11, 10, 55, 0.1);
        background: #f7f8fa !important;
        outline: none;
        transition: 0.2s;
        padding: 12px 18px;
    }
    .my-input::-moz-placeholder {
        color: rgba(0, 0, 0, 0.3);
        font-weight: 400;
    }
    .my-input::placeholder {
        color: rgba(0, 0, 0, 0.3);
        font-weight: 400;
    }
    .my-input:focus {
        border: 1px solid #0162A7;
    }

    .label {
        font-weight: 400;
        color: #000;
    }

    .my-about.data {
        width: 100%;
        max-width: 681px;
    }
    .my-about.data img {
        margin-top: 18px;
    }

    .convert {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .convert .box img {
        width: 100%;
        max-width: 200px;
        -o-object-fit: cover;
        object-fit: cover;
    }
    .convert .box .txt-16 {
        text-align: center;
        margin-top: 12px;
        width: 100%;
        max-width: 153px;
    }

    .convert.column {
        display: flex;
        align-items: flex-start;
        flex-direction: column;
        gap: 18px;
    }
    .convert.column .box {
        display: flex;
        align-items: center;
        width: 100%;
        gap: 12px;
    }
    .convert.column .box img {
        width: 100%;
        max-width: 200px;
        -o-object-fit: cover;
        object-fit: cover;
    }
    .convert.column .box .txt-16 {
        text-align: left;
        margin-top: 12px;
        width: 100%;
        max-width: none;
    }

    .interactive.form {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        flex-wrap: wrap;
        row-gap: 24px;
    }
    .interactive.form .box {
        position: relative;
        width: 100%;
        max-width: 421px;
    }
    @media (max-width: 950px) {
        .interactive.form .box {
            max-width: 100%;
        }
    }
    .interactive.form .box .label {
        margin-bottom: 12px;
    }
    .interactive.form .box.submit {
        margin-left: auto;
    }
    .interactive.form .my-btn.interactive {
        width: 100%;
    }

    .corruption-cards {
        display: flex;
        flex-wrap: wrap;
        gap: 24px;
    }
    @media (max-width: 1204px) {
        .corruption-cards {
            gap: 19px;
        }
    }
    @media (max-width: 739px) {
        .corruption-cards {
            flex-direction: column;
            align-items: center;
        }
    }

    .corruptionDocument-list {
        width: 435px;
        background: #F7FAFD;
        border-radius: 12px;
        padding: 18px;
        transition: 0.2s linear;
    }
    .corruptionDocument-list__desc {
        color: #38434E;
        margin-bottom: 12px;
    }
    .corruptionDocument-list__link span {
        color: #38434E;
    }
    .corruptionDocument-list:hover {
        transform: translateY(-5px);
    }
    .corruptionDocument-list:hover .text-blog .txt-20 {
        color: #0162A7;
    }
    @media (max-width: 1275px) {
        .corruptionDocument-list {
            width: 400px;
        }
    }
    @media (max-width: 1204px) {
        .corruptionDocument-list {
            width: 380px;
        }
    }
    @media (max-width: 1160px) {
        .corruptionDocument-list {
            width: 350px;
        }
    }
    @media (max-width: 1100px) {
        .corruptionDocument-list {
            width: 446px;
        }
    }
    @media (max-width: 1100px) {
        .corruptionDocument-list {
            width: 446px;
        }
    }
    @media (max-width: 990px) {
        .corruptionDocument-list {
            width: 400px;
        }
    }
    @media (max-width: 899px) {
        .corruptionDocument-list {
            width: 380px;
        }
    }
    @media (max-width: 859px) {
        .corruptionDocument-list {
            width: 350px;
        }
    }
    @media (max-width: 800px) {
        .corruptionDocument-list {
            width: 320px;
        }
    }
    @media (max-width: 739px) {
        .corruptionDocument-list {
            width: 446px;
        }
    }
    @media (max-width: 490px) {
        .corruptionDocument-list {
            width: 400px;
        }
    }
    @media (max-width: 430px) {
        .corruptionDocument-list {
            width: 350px;
        }
    }

    .articles-cards {
        display: flex;
        flex-wrap: wrap;
        gap: 50px;
    }
    @media (max-width: 730px) {
        .articles-cards {
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }
    }
    @media (max-width: 890px) {
        .articles-cards {
            gap: 20px;
        }
    }
    @media (max-width: 404px) {
        .articles-cards {
            gap: 18px;
        }
    }

    .articlestwo-card {
        display: flex;
        align-items: center;
        gap: 18px;
        width: 421px;
        transition: 0.1s linear;
    }
    .articlestwo-card:hover {
        transform: translateY(-5px);
    }
    .articlestwo-card:hover .text-blog .txt-16 {
        color: red;
    }
    .articlestwo-card__img {
        display: flex;
        width: 196px;
        height: 135px;
        -o-object-fit: contain;
        object-fit: contain;
    }
    .articlestwo-card__info--date {
        color: #748291;
    }
    .articlestwo-card__info--desc {
        color: #1e2128;
        font-weight: 600;
    }
    @media (max-width: 1272px) {
        .articlestwo-card {
            width: 400px;
        }
    }
    @media (max-width: 1230px) {
        .articlestwo-card {
            width: 380px;
        }
    }
    @media (max-width: 1190px) {
        .articlestwo-card {
            width: 350px;
        }
        .articlestwo-card__img {
            width: 160px;
            height: 135px;
        }
        .articlestwo-card__info--desc {
            font-size: 16px;
        }
    }
    @media (max-width: 1130px) {
        .articlestwo-card {
            width: 330px;
        }
        .articlestwo-card__info--desc {
            font-size: 14px;
        }
    }
    @media (max-width: 1100px) {
        .articlestwo-card {
            width: 421px;
        }
        .articlestwo-card__img {
            width: 196px;
            height: 135px;
        }
        .articlestwo-card__info--desc {
            font-size: 18px;
        }
    }
    @media (max-width: 972px) {
        .articlestwo-card {
            width: 380px;
        }
    }
    @media (max-width: 890px) {
        .articlestwo-card {
            width: 340px;
        }
        .articlestwo-card__img {
            width: 150px;
            height: 135px;
        }
        .articlestwo-card__info--desc {
            font-size: 16px;
        }
    }
    @media (max-width: 810px) {
        .articlestwo-card {
            width: 300px;
        }
        .articlestwo-card__img {
            width: 150px;
            height: 135px;
        }
        .articlestwo-card__info--desc {
            font-size: 14px;
        }
    }
    @media (max-width: 730px) {
        .articlestwo-card {
            width: 421px;
        }
        .articlestwo-card__img {
            width: 196px;
            height: 135px;
        }
        .articlestwo-card__info--desc {
            font-size: 18px;
        }
    }
    @media (max-width: 500px) {
        .articlestwo-card {
            width: 421px;
        }
        .articlestwo-card__img {
            width: 160px;
            height: 135px;
        }
        .articlestwo-card__info--desc {
            font-size: 16px;
        }
    }
    @media (max-width: 404px) {
        .articlestwo-card {
            width: 350px;
        }
        .articlestwo-card__img {
            width: 108px;
            height: 80px;
        }
        .articlestwo-card__info--desc {
            font-size: 14px;
        }
    }

    .articlesTwoId-img {
        display: flex;
        width: 100%;
        max-width: 642px;
        height: 388px;
        -o-object-fit: contain;
        object-fit: contain;
        margin-bottom: 24px;
    }
    .articlesTwoId-link {
        margin-bottom: 12px;
    }
    .articlesTwoId-title {
        margin-bottom: 12px;
    }
    .articlesTwoId-date {
        margin-bottom: 24px;
    }
    .articlesTwoId-desc {
        margin-bottom: 18px;
    }

    .pagination {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .pagination-item {
        width: 30px;
        height: 30px;
        border: 1px solid #38434E;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .right-content_sroll {
        height: 700px;
        overflow-y: auto;
        overflow-x: hidden;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .right-content_sroll::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        background-color: #f5f5f5;
    }

    .right-content_sroll::-webkit-scrollbar {
        width: 12px;
        background-color: #f5f5f5;
    }

    .right-content_sroll::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        background-color: #0162A7;
    }

    .document-right::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        background-color: #f5f5f5;
    }

    .document-right::-webkit-scrollbar {
        width: 12px;
        background-color: #f5f5f5;
    }

    .document-right::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        background-color: #0162A7;
    }

    .link {
        text-decoration: none;
        cursor: pointer;
        color: #000 !important;
    }

    .loaderBox {
        display: grid;
        place-items: center;
        width: 100%;
        height: 100vh;
        min-height: 60vh;
        z-index: 1000;
    }

    .detail-content {
        position: relative;
        min-height: 60vh;
    }

    .loader {
        position: relative;
        width: 150px;
        height: 150px;
        background: transparent;
        border: 3px solid rgba(0, 102, 255, 0.1);
        border-radius: 50%;
        text-align: center;
        color: #0066ff;
        text-transform: uppercase;
        text-shadow: 0 0 10px #0066ff;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        display: grid;
        place-items: center;
    }

    .loader::before {
        content: "";
        position: absolute;
        top: -3px;
        left: -3px;
        width: 100%;
        height: 100%;
        border: 3px solid transparent;
        border-top: 3px solid #0066ff;
        border-right: 3px solid #0066ff;
        border-radius: 50%;
        animation: animateC 2s linear infinite;
    }

    .loader span {
        display: block;
        position: absolute;
        top: calc(50% - 2px);
        left: 50%;
        width: 50%;
        height: 4px;
        background: transparent;
        transform-origin: left;
        animation: animate 2s linear infinite;
    }

    .loader span::before {
        content: "";
        position: absolute;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: #00aeff;
        top: -6px;
        right: -8px;
        box-shadow: 0 0 20px 5px #0066ff;
    }

    .loader-text {
        font-size: 16px;
    }

    @keyframes animateC {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
    @keyframes animate {
        0% {
            transform: rotate(45deg);
        }
        100% {
            transform: rotate(405deg);
        }
    }
    .errorMessage {
        position: absolute;
        bottom: -20px;
        left: 5px;
        color: red;
    }

    .aplication-btn-dis {
        opacity: 0.6;
        pointer-events: none;
    }

    .aplication-btn {
        margin-left: auto;
    }

    .box.area {
        width: 100%;
        max-width: 100% !important;
    }

    .data-btn {
        background: none;
        border: none;
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        text-align: left;
        gap: 12px;
        width: 100%;
    }

    .btn-blue p {
        color: #0162a7 !important;
    }

    .map-box {
        padding: 30px;
    }

    .contact-btn {
        width: 100%;
        display: flex;
        margin-left: -60px;
    }
    @media (max-width: 1100px) {
        .contact-btn {
            margin-left: 0;
        }
    }

    .login {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 500px;
        height: 300px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        background: #0066ff;
        padding: 30px;
    }
    .login input {
        width: 100%;
        height: 30px;
        background: white;
    }

    .media-footer {
        display: none;
    }
    @media (max-width: 650px) {
        .media-footer {
            display: block;
        }
    }

    .mobile-footer {
        display: block;
    }
    @media (max-width: 650px) {
        .mobile-footer {
            display: none;
        }
    }

    .error-enter-active {
        animation: error-in 0.5s;
    }

    .error-leave-active {
        animation: error-in 0.5s;
    }

    @keyframes error-in {
        0% {
            transform: translateX(0px);
            timing-function: ease-in;
        }
        37% {
            transform: translateX(5px);
            timing-function: ease-out;
        }
        55% {
            transform: translateX(-5px);
            timing-function: ease-in;
        }
        73% {
            transform: translateX(4px);
            timing-function: ease-out;
        }
        82% {
            transform: translateX(-4px);
            timing-function: ease-in;
        }
        91% {
            transform: translateX(2px);
            timing-function: ease-out;
        }
        96% {
            transform: translateX(-2px);
            timing-function: ease-in;
        }
        100% {
            transform: translateX(0px);
            timing-function: ease-in;
        }
    }
    .document-right {
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 500px;
        height: 600px;
        overflow-y: auto;
    }

    .mobil-menu {
        display: flex;
        justify-content: space-between;
        width: 100%;
        max-width: 1100px;
        margin-right: 50px;
    }

    .active-link {
        color: #0162a7;
    }
    .active-link p {
        color: #0162a7 !important;
    }

    .active-star-btn svg path {
        fill: gold !important;
    }

    .sidebarItem {
        display: flex;
        flex-direction: column;
    }

    .search-seaction {
        position: relative;
        background-color: #fff;
        height: auto;
        padding: 10px 0px;
    }
    .search-seaction .my-container {
        display: flex;
        flex-direction: column;
    }

    .search-header {
        width: 400px;
        position: absolute;
        z-index: -1;
        top: 0;
        right: 0;
        display: flex;
        align-items: center;
        gap: 30px;
        background-color: #fff;
        border-radius: 50px;
        transition: 0.5s linear;
        opacity: 0;
    }
    .search-header.active {
        top: 120%;
        opacity: 1;
        z-index: 5;
    }

    .search-input {
        display: flex;
        gap: 0;
        position: relative;
        margin-left: auto;
        width: 100%;
        max-width: 500px;
    }

    .search-input input[type=text] {
        width: 100%;
        padding: 10px;
        border: 1px solid #033960;
        border-radius: 12px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        outline: none;
        display: flex;
        background: #fff;
    }

    .search-input button[type=submit] {
        background-color: #0162A7;
        border: none;
        color: #fff;
        cursor: pointer;
        padding: 11px 20px;
        border-radius: 12px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        position: absolute;
        top: 0;
        right: 0;
        transition: 0.2s ease;
    }

    .search-input button[type=submit]:hover {
        color: rgb(255, 255, 255);
        background: #037bd1;
    }

    .search-section__content {
        padding: 100px 0px;
    }

    .tran:hover svg {
        transform: translate(0);
    }

    .bg-menu {
        position: fixed;
        pointer-events: none;
        width: 100%;
        height: 100vh;
        z-index: 2;
        opacity: 0;
        top: 0;
        left: 0;
        transition: 0.2s ease;
        background: rgba(29, 46, 52, 0.5);
        -webkit-backdrop-filter: blur(5px);
        backdrop-filter: blur(5px);
    }
    .bg-menu.active {
        opacity: 1;
        pointer-events: visible;
    }

    .kod-blog {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 18px;
    }
    .kod-blog .kod-text {
        color: #6D7983;
        font-weight: 400;
    }
    .kod-blog .kod-blog-in {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 18px;
    }
    .kod-blog .kod-blog-in input {
        width: 47px;
        height: 47px;
        text-align: center;
    }

    .modal {
        background: rgba(29, 46, 52, 0.5) !important;
        -webkit-backdrop-filter: blur(5px) !important;
        backdrop-filter: blur(5px) !important;
    }
    .modal .modal-content {
        border-radius: 24px;
        overflow: hidden;
        border: none;
    }
    @media (max-width: 650px) {
        .modal .modal-content {
            border-radius: 18px;
        }
    }
    .modal .modal-content .modal-body {
        background: #FFFFFF;
        -webkit-backdrop-filter: blur(50px);
        backdrop-filter: blur(50px);
        padding: 40px;
        position: relative;
    }
    @media (max-width: 950px) {
        .modal .modal-content .modal-body {
            padding: 24px;
        }
    }
    @media (max-width: 650px) {
        .modal .modal-content .modal-body {
            padding: 18px;
        }
    }
    .modal .modal-content .modal-body .close-btn {
        cursor: pointer;
        position: absolute;
        top: 10px;
        right: 10px;
        width: 30px;
        height: 30px;
        color: #000;
        transition: 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        outline: none;
        font-size: 12px;
        border-radius: 50%;
        background: transparent;
    }
    @media (max-width: 650px) {
        .modal .modal-content .modal-body .close-btn {
            top: 8px;
            right: 8px;
        }
    }
    .modal .modal-content .modal-body .close-btn i {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .modal .modal-content .modal-body .close-btn:hover {
        opacity: 0.7;
    }
    .modal .modal-content .modal-body .modal-in {
        display: flex;
        flex-direction: column;
    }
    @media (max-width: 650px) {
        .modal .modal-content .modal-body .modal-in {
            padding-top: 24px;
        }
    }

    .sign-in {
        cursor: pointer;
        color: #0162A7;
    }
    .sign-in svg path {
        fill: #0162A7;
    }

    .my-form {
        display: flex;
        flex-direction: column;
        width: 100%;
        align-items: flex-start;
        margin-top: 24px;
        gap: 24px;
    }

    .my-group {
        display: flex;
        flex-direction: column;
        width: 100%;
        align-items: flex-start;
        gap: 10px;
    }
    .my-group .label {
        font-size: 14px;
        line-height: 19px;
        font-weight: 400;
        font-weight: 400;
        color: #000;
    }
    @media (max-width: 650px) {
        .my-group .label {
            font-size: 12px;
            line-height: 18px;
        }
    }

    .label {
        font-weight: 400;
        color: #8E8E93;
    }

    .input {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 30px;
        padding: 11px 23px;
        height: 46px;
        font-size: 14px;
        line-height: 19px;
        font-weight: 400;
        color: #fff;
    }
    @media (max-width: 650px) {
        .input {
            font-size: 12px;
            line-height: 18px;
        }
    }
    .input:active {
        border: 1px solid #0A97BC;
    }
    .input:focus {
        border: 1px solid #0A97BC;
        outline: none;
    }
    .input::-moz-placeholder {
        color: #D1D6DE;
        font-weight: 400;
    }
    .input::placeholder {
        color: #D1D6DE;
        font-weight: 400;
    }

    .my-chek {
        display: flex;
        align-items: flex-start;
        gap: 12px;
    }

    .file-input {
        width: -moz-max-content;
        width: max-content;
    }
    .file-input input {
        display: none;
    }
    .file-input .green-btn {
        width: -moz-max-content;
        width: max-content;
    }

    .mobile-menu {
        width: 100%;
        height: 100vh;
        position: fixed;
        transition: 0.3s ease;
        background: #033960;
        z-index: 1500;
        top: 0;
        left: -100%;
        padding: 12px;
    }
    .mobile-menu.active {
        left: 0;
    }
    .mobile-menu .back-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        transition: 0.2s;
    }
    .mobile-menu .back-btn:hover {
        opacity: 0.7;
        cursor: pointer;
    }
    .mobile-menu .nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-bottom: 20px;
    }
    .mobile-menu .nav-ac {
        margin-right: 40px;
    }
    .mobile-menu .line {
        border-bottom: 1px solid #24476D;
    }
    .mobile-menu .contact {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .mobile-menu .contact .mobil-contact-in {
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 10px;
        width: 50%;
    }
    .mobile-menu .contact .mobil-contact-in:first-child {
        border-right: 1px solid #24476D;
    }
    .mobile-menu .contact .mobil-contact-in .txt-12 {
        margin-top: 10px;
        color: #A1BAD5;
        width: -moz-max-content;
        width: max-content;
    }
    .mobile-menu .contact .mobil-contact-in .txt-18 {
        width: -moz-max-content;
        width: max-content;
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }
    .mobile-menu .main-menu {
        padding: 0 12px;
    }
    .mobile-menu .main-menu .txt-16 {
        color: #fff;
    }
    .mobile-menu .main-menu .menu {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 0;
    }
    .mobile-menu .main-menu .current {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        gap: 12px;
        cursor: pointer;
    }
    .mobile-menu .bottom {
        position: absolute;
        bottom: 0;
        width: 100%;
        padding: 12px;
        display: flex;
        flex-direction: column;
    }
    .mobile-menu .bottom .special {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }
    .mobile-menu .bottom .special .txt-14 {
        color: rgba(255, 255, 255, 0.4);
    }
    .mobile-menu .bottom .media-box {
        z-index: 10;
        border-radius: 8px 0px 0px 8px;
        background: transparent;
        padding: 12px;
        display: flex;
        gap: 20px;
    }
    @media (max-width: 650px) {
        .mobile-menu .bottom .media-box {
            display: flex;
        }
    }
    .mobile-menu .bottom .media-box .btn-social {
        width: 32px;
        height: 32px;
        border: none;
        outline: none;
        display: grid;
        place-items: center;
        border-radius: 8px;
        transition: 0.2s;
        background: rgba(255, 255, 255, 0.1);
    }
    .mobile-menu .bottom .media-box .btn-social.active {
        background: #0162A7;
    }
    .mobile-menu .bottom .media-box .btn-social.active svg path {
        fill: #fff;
    }
    .mobile-menu .bottom .media-box .btn-social svg {
        transition: 0.2s;
    }
    .mobile-menu .bottom .media-box .btn-social svg path {
        fill: #fff;
    }
    .mobile-menu .bottom .media-box .main-rel {
        position: relative;
    }
    .mobile-menu .bottom .media-box .main-rel.text {
        z-index: 3;
    }
    .mobile-menu .bottom .media-box .main-rel.color {
        z-index: 1;
    }
    .mobile-menu .bottom .media-box .main-rel .text-size-bloc {
        min-height: 110px;
        box-shadow: 0px 4px 18px 0px rgba(142, 167, 216, 0.25);
        opacity: 0;
        pointer-events: none;
        position: absolute;
        right: -12px;
        top: -8px;
        padding: 12px;
        padding: 12px 68px 12px 12px;
        border-radius: 8px 0px 0px 8px;
        background: #FFF;
        width: 240px;
        display: flex;
        flex-direction: column;
        gap: 12px;
        z-index: -2;
        margin-right: -10px;
        transition: 0.2s;
    }
    .mobile-menu .bottom .media-box .main-rel .text-size-bloc.active {
        opacity: 1;
        margin-right: 0px;
        pointer-events: visible;
    }
    .mobile-menu .bottom .media-box .main-rel .color-body {
        box-shadow: 0px 4px 18px 0px rgba(142, 167, 216, 0.25);
        opacity: 0;
        pointer-events: none;
        position: absolute;
        right: -12px;
        top: -50%;
        padding: 12px;
        padding: 12px 68px 12px 12px;
        border-radius: 8px 0px 0px 8px;
        background: #FFF;
        width: 240px;
        min-height: 110px;
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-right: -10px;
        z-index: -1;
        transition: 0.2s;
    }
    .mobile-menu .bottom .media-box .main-rel .color-body .color-block {
        display: grid;
        grid-template-columns: auto auto auto;
        gap: 12px;
    }
    .mobile-menu .bottom .media-box .main-rel .color-body .color-block .bloc {
        display: grid;
        grid-template-columns: auto;
        place-items: center;
        gap: 5px;
    }
    .mobile-menu .bottom .media-box .main-rel .color-body .color-block .bloc.active .top svg {
        opacity: 1;
    }
    .mobile-menu .bottom .media-box .main-rel .color-body .color-block .bloc.active .txt-12 {
        color: #0162A7;
    }
    .mobile-menu .bottom .media-box .main-rel .color-body .color-block .bloc .top {
        width: 32px;
        height: 32px;
        border-radius: 5px;
        background: #0162A7;
        display: grid;
        grid-template-columns: auto;
        place-items: center;
    }
    .mobile-menu .bottom .media-box .main-rel .color-body .color-block .bloc .top svg {
        transition: 0.2s;
        opacity: 0;
    }
    .mobile-menu .bottom .media-box .main-rel .color-body .color-block .bloc .top svg path {
        fill: #fff;
    }
    .mobile-menu .bottom .media-box .main-rel .color-body .color-block .bloc .top.gray {
        background: #b4b4b4;
    }
    .mobile-menu .bottom .media-box .main-rel .color-body .color-block .bloc .top.dark {
        background: #272727;
    }
    .mobile-menu .bottom .media-box .main-rel .color-body .color-block .bloc .txt-12 {
        text-align: center;
        transition: 0.2s;
    }
    .mobile-menu .bottom .media-box .main-rel .color-body.active {
        opacity: 1;
        margin-right: 0px;
        pointer-events: visible;
    }
    .mobile-menu .bottom .socials {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .mobile-menu .bottom .socials .social {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 18px;
    }
    .mobile-menu .bottom .socials .language {
        margin-right: 12px;
    }
    .mobile-menu .bottom .location {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
    }
    .mobile-menu .bottom .location .txt-16 {
        color: #fff;
    }

    html::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        background-color: #F5F5F5;
    }

    html::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5;
    }

    html::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        background-color: #0162A7;
    }

    .hov {
        transition: 0.2s ease;
        cursor: pointer;
    }
    .hov:hover {
        opacity: 0.8;
    }

    .logo.user {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 20px;
        margin: 10px 0;
    }

    .logo {
        width: auto;
        display: grid;
        grid-template-columns: 67px 120px;
        gap: 8px;
        place-items: center;
    }
    @media (max-width: 650px) {
        .logo {
            grid-template-columns: 38px 94px;
        }
    }
    .logo img {
        width: 100%;
        -o-object-fit: contain;
        object-fit: contain;
    }
    .logo .txt-12 {
        width: 100%;
        text-align: start;
        color: #fff;
        font-weight: 400;
    }
    @media (max-width: 650px) {
        .logo .txt-12 {
            font-size: 10px;
        }
    }

    .footer-logo {
        width: auto;
        display: grid;
        grid-template-columns: 110px auto;
        gap: 8px;
        place-items: center;
    }
    @media (max-width: 650px) {
        .footer-logo {
            grid-template-columns: 60px 120px;
            margin: auto;
        }
    }
    .footer-logo img {
        width: 100%;
        -o-object-fit: contain;
        object-fit: contain;
    }
    .footer-logo .txt-16 {
        width: 100%;
        text-align: start;
        color: #fff;
        font-weight: 400;
    }
    @media (max-width: 650px) {
        .footer-logo .txt-16 {
            font-size: 12px;
        }
    }

    .my-burger {
        display: none;
    }
    @media (max-width: 1200px) {
        .my-burger {
            display: flex;
        }
    }
    .my-burger path {
        fill: #fff;
    }

    .navigation {
        width: 100%;
        padding: 12px 0;
        background: #033960;
        position: relative;
        z-index: 10;
    }
    .navigation .navigation-in {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
    }
    @media (max-width: 900px) {
        .navigation .navigation-in {
            gap: 12px;
        }
    }
    .navigation .navigation-in .left-nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
    }
    @media (max-width: 900px) {
        .navigation .navigation-in .left-nav {
            gap: 12px;
        }
    }
    .navigation .navigation-in .left-nav .location {
        display: flex;
        align-items: center;
        gap: 10px;
        place-items: center;
        color: #fff;
        font-weight: 300;
    }
    @media (max-width: 1200px) {
        .navigation .navigation-in .left-nav .location {
            display: none;
        }
    }
    @media (max-width: 1200px) {
        .navigation .navigation-in .left-nav .my-global {
            display: none;
        }
    }
    @media (max-width: 900px) {
        .navigation .navigation-in .left-nav .language {
            display: none;
        }
    }

    .nav-ac {
        width: auto;
        padding: 5px 9px 5px 5px;
        border-radius: 50px;
        background: rgba(255, 255, 255, 0.1);
        display: grid;
        grid-template-columns: auto auto;
        gap: 11px;
        place-items: center;
    }

    .language {
        position: relative;
        width: auto;
    }
    .language:hover .language-menu {
        opacity: 1;
    }
    .language .language-menu {
        opacity: 0;
        pointer-events: visible;
        margin-top: 0px;
    }
    .language-in {
        display: flex;
        align-items: center;
        gap: 4px;
        padding: 5px 0;
    }
    .language-in .txt-16 {
        font-weight: 400;
        color: #fff;
    }
    .language-menu {
        padding: 12px;
        width: 100%;
        border-radius: 8px;
        background: #0162A7;
        position: absolute;
        box-shadow: 2px 2px 6px 0px rgba(34, 60, 80, 0.2);
        top: 100%;
        left: 0;
        transition: 0.2s;
        opacity: 0;
        pointer-events: none;
        margin-top: 3px;
    }
    .language-menu .txt-16 {
        padding: 3px 2px;
        color: #fff;
        font-weight: 400;
        cursor: pointer;
        width: 100%;
        text-align: center;
    }

    .nav-contact {
        display: flex;
        align-items: center;
    }
    @media (max-width: 400px) {
        .nav-contact {
            display: none;
        }
    }
    .nav-contact-in {
        border-right: 1px solid #24476D;
        padding: 0 20px;
    }
    @media (max-width: 900px) {
        .nav-contact-in {
            border-right: 1px solid transparent;
            padding: 0;
        }
    }
    .nav-contact-in:last-child {
        border-right: 1px solid transparent;
    }
    @media (max-width: 900px) {
        .nav-contact-in:last-child {
            display: none;
        }
    }
    .nav-contact-in .txt-12 {
        color: #A1BAD5;
        font-weight: 300;
    }
    @media (max-width: 650px) {
        .nav-contact-in .txt-12 {
            font-size: 10px;
        }
    }
    .nav-contact-in .txt-18 {
        color: #fff;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 5px;
    }
    @media (max-width: 650px) {
        .nav-contact-in .txt-18 {
            font-size: 14px;
        }
    }

    .my-global {
        display: flex;
        align-items: center;
        gap: 12px;
    }
    .my-global-in {
        width: auto;
    }
    .my-global-in img {
        width: 24px;
        -o-object-fit: contain;
        object-fit: contain;
    }

    .my-navbar {
        width: 100%;
        padding: 9px 0;
        background-color: #fff;
        border: 1px solid #D8E1EA;
        position: relative;
        z-index: 9;
    }
    @media (max-width: 1200px) {
        .my-navbar {
            display: none;
        }
    }
    .my-navbar .my-navbar-in {
        position: relative;
        background-color: #fff;
        z-index: 50;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
    }
    .my-navbar .my-navbar-in .nav-left {
        display: flex;
        align-items: center;
        gap: 24px;
        position: relative;
    }

    .my-menus {
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-left: 0;
        margin-bottom: 0;
        background-color: #fff;
        position: relative;
        z-index: 50;
    }
    .my-menus ul {
        padding-left: 0;
        margin-bottom: 0;
    }
    .my-menus li {
        border-right: 1px solid #D8E1EA;
        position: relative;
        cursor: pointer;
        width: auto;
    }
    .my-menus li:hover .drop-menu {
        opacity: 1;
        pointer-events: visible;
        margin-top: 0px;
    }
    .my-menus li .router-link-active .txt-16 {
        color: #0162A7;
    }
    .my-menus li .router-link-active .txt-16 svg path {
        fill: #0162A7;
    }
    .my-menus li .router-link-active:hover .txt-16 {
        color: #0162A7;
    }
    .my-menus li .router-link-active:hover .txt-16 svg path {
        fill: #0162A7;
    }
    .my-menus li:last-child {
        border-right: 1px solid transparent;
    }
    .my-menus li .txt-16 {
        cursor: pointer;
        color: #38434E;
        font-weight: 500;
        display: flex;
        align-items: center;
        transition: 0.2s;
    }
    .my-menus li .txt-16:hover {
        color: #0162A7;
    }
    .my-menus li .txt-16:hover svg path {
        fill: #0162A7;
    }
    .my-menus li .drop-menu {
        padding: 10px 0;
        width: -moz-max-content;
        width: max-content;
        max-width: 400px;
        border-radius: 8px;
        background: #fff;
        position: absolute;
        box-shadow: 2px 2px 6px 0px rgba(34, 60, 80, 0.2);
        top: 100%;
        left: 0;
        transition: 0.2s;
        opacity: 0;
        pointer-events: none;
        margin-top: 3px;
    }
    .my-menus li .drop-menu li {
        border-bottom: 1px solid #D8E1EA;
        border-right: 1px solid transparent;
    }
    .my-menus li .drop-menu li:last-child {
        border-bottom: 1px solid transparent;
    }
    .my-menus li .drop-menu .txt-16 {
        padding: 10px 18px;
        line-height: 25px;
    }

    .footer {
        width: 100%;
        background: #04304F;
    }
    .footer .footer-in {
        padding: 60px 0 40px;
        display: grid;
        grid-template-columns: auto auto auto auto;
        gap: 80px;
    }
    @media (max-width: 1100px) {
        .footer .footer-in {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 0px;
            gap: 20px;
        }
    }
    .footer .footer-in .footer-blog {
        max-width: 340px;
    }
    @media (max-width: 480px) {
        .footer .footer-in .footer-blog {
            max-width: 160px;
        }
    }
    .footer .footer-in .footer-blog.logo-blog {
        padding: 20px 0;
    }
    @media (max-width: 1100px) {
        .footer .footer-in .footer-blog.logo-blog {
            max-width: 100%;
            width: 100%;
            align-items: center;
            display: flex;
            flex-direction: column;
        }
    }
    .footer .footer-in .footer-blog .footer-contact {
        width: 100%;
        padding: 0 18px;
        border-radius: 24px;
        background: rgba(255, 255, 255, 0.04);
    }
    @media (max-width: 650px) {
        .footer .footer-in .footer-blog .footer-contact {
            padding: 0px 12px;
        }
    }
    .footer .footer-in .footer-blog .footer-contact .footer-contact-in {
        width: 100%;
        display: grid;
        grid-template-columns: 24px auto;
        gap: 10px;
        padding: 18px 0;
        border-bottom: 1px solid rgba(232, 236, 244, 0.1);
    }
    @media (max-width: 650px) {
        .footer .footer-in .footer-blog .footer-contact .footer-contact-in {
            padding: 12px 0;
        }
    }
    .footer .footer-in .footer-blog .footer-contact .footer-contact-in:last-child {
        border-bottom: 1px solid transparent;
    }
    .footer .footer-in .footer-blog .footer-contact .footer-contact-in .text-blog {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 3px;
    }
    .footer .footer-in .footer-blog .footer-contact .footer-contact-in .text-blog .txt-16 {
        color: #fff;
        font-weight: 600;
    }
    .footer .footer-in .footer-blog .footer-contact .footer-contact-in .text-blog .txt-12 {
        color: #fff;
        font-weight: 400;
        opacity: 0.7;
    }
    .footer .footer-in .footer-blog .footer-menu {
        display: flex;
        flex-direction: column;
        gap: 18px;
        padding-left: 0;
    }
    .footer .footer-in .footer-blog .footer-menu .txt-16 {
        color: #fff;
        font-weight: 600;
    }
    .footer .footer-in .footer-blog .footer-menu li .txt-16 {
        color: #fff;
        font-weight: 400;
        opacity: 0.7;
        transition: 0.2s;
    }
    .footer .footer-in .footer-blog .footer-menu li .txt-16:hover {
        opacity: 0.9;
        cursor: pointer;
    }

    .footer-bottom {
        width: 100%;
        padding: 35px 0;
        display: flex;
        justify-content: center;
        background: #04304F;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }
    .footer-bottom p {
        width: 100%;
        padding: 0 20px;
        text-align: center;
        color: rgba(255, 255, 255, 0.4);
        font-weight: 300;
    }

    .modal {
        z-index: 1000;
    }

    textarea {
        resize: none;
    }

    .my-section {
        padding: 60px 0;
        width: 100%;
    }
    @media (max-width: 650px) {
        .my-section {
            padding: 30px 0;
        }
    }
    .my-section .my-section-in {
        width: 100%;
    }

    .top-nav {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
    }

    .pac {
        font-family: "Inter", sans-serif;
        color: #0162A7;
    }

    .my-ul {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 24px;
    }
    .my-ul li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
    }
    .my-ul li .txt-18 {
        color: #000;
        font-weight: 500;
    }

    .sec-text {
        color: #38434e;
        font-weight: 400;
    }

    .bg-gray {
        background: #f8fafd !important;
    }

    .my-cards-3 {
        width: 100%;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-top: 30px;
    }
    @media (max-width: 1000px) {
        .my-cards-3 {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 30px;
        }
    }
    @media (max-width: 650px) {
        .my-cards-3 {
            grid-template-columns: repeat(1, 1fr);
            gap: 18px;
            margin-top: 18px;
        }
    }

    .my-cards-4 {
        width: 100%;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
        margin-top: 30px;
    }
    @media (max-width: 1000px) {
        .my-cards-4 {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 30px;
        }
    }
    @media (max-width: 650px) {
        .my-cards-4 {
            grid-template-columns: repeat(1, 1fr);
            gap: 18px;
            margin-top: 18px;
        }
    }

    .my-cards-6 {
        width: 100%;
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 20px;
        row-gap: 40px;
        margin-top: 50px;
    }
    @media (max-width: 1120px) {
        .my-cards-6 {
            width: 100%;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 50px;
        }
    }
    @media (max-width: 420px) {
        .my-cards-6 {
            gap: 2px;
        }
    }
    @media (max-width: 375px) {
        .my-cards-6 {
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            row-gap: 30px;
            margin-top: 40px;
        }
    }

    .news-image {
        height: 200px !important;
    }

    .danger {
        color: #e53131;
    }

    .slide-fade-enter-active {
        transition: all 0.2s ease-out;
    }

    .slide-fade-leave-active {
        transition: all 0.2s cubic-bezier(1, 0.5, 0.8, 1);
    }

    .slide-fade-enter-from,
    .slide-fade-leave-to {
        transform: translateY(10px);
        opacity: 0;
    }

    .fade-enter-active,
    .fade-leave-active {
        transition: opacity 0.5s ease;
    }

    .fade-enter-from,
    .fade-leave-to {
        opacity: 0;
    }

    .banner-page {
        width: 100%;
        background: linear-gradient(99deg, #025496 0%, #1c71b5 100.33%);
        position: relative;
        overflow: hidden;
        z-index: 2;
    }
    .banner-page::before {
        content: "";
        position: absolute;
        background: linear-gradient(99deg, #025496 0%, #1c71b5 100.33%);
        z-index: 2;
        width: 818px;
        height: 478px;
        background-size: contain;
        background-position: center;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-image: url("../img/map.png");
        opacity: 0.1;
    }
    @media (max-width: 650px) {
        .banner-page::before {
            width: 382px;
            height: 222px;
            background-repeat: no-repeat;
        }
    }
    .banner-page::after {
        content: "";
        position: absolute;
        z-index: -1;
        width: 2000px;
        height: 1300px;
        top: 50%;
        background: #0a5a9d;
        transform: translateY(-50%) rotate(125deg);
        right: -1500px;
    }
    @media (max-width: 650px) {
        .banner-page::after {
            top: 98%;
        }
    }
    .banner-page .banner-page-in {
        width: 100%;
        z-index: 3;
        overflow: visible;
        padding: 20px 0;
        display: flex;
        align-items: center;
        padding: 20px 0;
        min-height: 550px;
    }
    @media (max-width: 850px) {
        .banner-page .banner-page-in {
            width: 100%;
            min-height: auto;
        }
    }
    .banner-page .banner-page-in .my-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-right: auto;
    }
    .banner-page .banner-page-in .my-container .my-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    @media (max-width: 850px) {
        .banner-page .banner-page-in .my-container {
            flex-direction: column;
        }
    }
    .banner-page .banner-page-in .text-blog {
        width: 100%;
        display: flex;
        justify-content: center;
        flex-direction: column;
        gap: 24px;
    }
    @media (max-width: 1200px) {
        .banner-page .banner-page-in .text-blog {
            width: 80%;
        }
    }
    @media (max-width: 950px) {
        .banner-page .banner-page-in .text-blog {
            width: 60%;
        }
    }
    @media (max-width: 850px) {
        .banner-page .banner-page-in .text-blog {
            width: 100%;
        }
    }
    .banner-page .banner-page-in .text-blog .txt-42 {
        color: #fff;
    }
    .banner-page .banner-page-in .swiper-slide {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .banner-page .swiper-pagination-bullet {
        width: 24px;
        height: 24px;
        display: inline-block;
        border-radius: 50%;
        background: #fff;
        transition: 0.2s;
        opacity: 0.5;
    }
    .banner-page .swiper-pagination-bullet.swiper-pagination-bullet-active {
        opacity: 1;
    }
    .banner-page .images-banner {
        width: 100%;
        max-width: 700px;
    }
    .banner-page .images-banner img {
        -o-object-fit: cover;
        object-fit: cover;
        width: 100%;
    }

    .bottom {
        display: flex;
        align-items: center;
        gap: 24px;
        width: 100%;
    }
    .bottom .nav-contact-in {
        padding: 0;
        border-right: 1px solid transparent;
    }
    .bottom .nav-contact-in .txt-12 {
        color: #a1bad5;
        font-weight: 300;
        width: -moz-max-content;
        width: max-content;
    }
    .bottom .nav-contact-in .txt-18 {
        width: -moz-max-content;
        width: max-content;
        color: #fff;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .blog-icon .icon-bg {
        display: grid;
        place-items: center;
        width: 65px;
        height: 65px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
    }
    .blog-icon .text {
        max-width: 455px;
        color: #fff;
    }
    .blog-icon .text .txt-12 {
        opacity: 0.8;
        font-weight: 300;
    }

    .contact-icon {
        display: grid;
        grid-template-columns: 65px auto;
        gap: 12px;
        width: auto;
    }
    @media (max-width: 650px) {
        .contact-icon {
            grid-template-columns: 40px auto;
        }
    }
    .contact-icon .icon-bg {
        display: grid;
        place-items: center;
        width: 65px;
        height: 65px;
        border-radius: 50%;
        background: rgba(1, 98, 167, 0.1);
    }
    @media (max-width: 650px) {
        .contact-icon .icon-bg {
            width: 40px;
            height: 40px;
        }
    }
    @media (max-width: 650px) {
        .contact-icon .icon-bg svg {
            width: 18px;
            height: 18px;
        }
    }
    .contact-icon .my-text {
        width: 100%;
    }
    .contact-icon .my-text .txt-14 {
        opacity: 0.8;
        font-weight: 300;
    }
    .contact-icon .my-text .txt-20 {
        color: #1e2128;
        font-weight: bold;
    }

    .grid-3 {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        width: 100%;
    }
    @media (max-width: 1000px) {
        .grid-3 {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
    }
    @media (max-width: 1000px) {
        .grid-3 {
            grid-template-columns: repeat(1, 1fr);
            gap: 12px;
        }
    }

    .grid-5 {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 20px;
        width: 100%;
    }
    @media (max-width: 1000px) {
        .grid-5 {
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
    }
    @media (max-width: 375px) {
        .grid-5 {
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
        }
    }

    .grid-2 {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        width: 100%;
    }
    @media (max-width: 1000px) {
        .grid-2 {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
    }
    @media (max-width: 1000px) {
        .grid-2 {
            grid-template-columns: repeat(1, 1fr);
            gap: 12px;
        }
    }

    .grid-1 {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        gap: 20px;
        width: 100%;
    }

    .section-text {
        width: 100%;
        color: #38434e;
    }

    .xizmat-card {
        padding: 18px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
        width: 100%;
    }
    @media (max-width: 650px) {
        .xizmat-card {
            gap: 12px;
            padding: 9px;
        }
    }
    .xizmat-card a {
        transition: 0.2s linear;
    }
    .xizmat-card a:hover {
        transform: translateY(-10px);
    }
    .xizmat-card .txt-18 {
        color: #232b33;
        text-align: center;
    }
    .xizmat-card .icon-bg {
        width: 120px;
        height: 120px;
        border: 1px solid #dbe7f2;
        background: #fff;
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.04);
        margin-top: -50px;
        border-radius: 50%;
        margin: 0 auto;
    }
    @media (max-width: 650px) {
        .xizmat-card .icon-bg {
            width: 80px;
            height: 80px;
            margin-top: -10px;
        }
    }
    .xizmat-card .icon-bg img {
        width: 90px;
    }
    @media (max-width: 650px) {
        .xizmat-card .icon-bg img {
            width: 60px;
        }
    }
    .xizmat-card .icon-bg i {
        font-size: 50px;
        color: #0162A7;
    }

    .banner-slider {
        width: 100%;
        margin-top: 30px;
        position: relative;
    }
    .banner-slider .banner-slider-item {
        width: 100%;
        height: 400px;
        border-radius: 24px;
        overflow: hidden;
    }
    @media (max-width: 650px) {
        .banner-slider .banner-slider-item {
            height: 189px;
        }
    }
    .banner-slider .banner-slider-item img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        -o-object-position: center;
        object-position: center;
    }
    .banner-slider .slider-btn {
        position: absolute;
        z-index: 2;
        top: 50%;
        transform: translateY(-50%);
    }
    .banner-slider .slider-btn.prev {
        left: -20px;
    }
    .banner-slider .slider-btn.next {
        right: -20px;
    }

    .about-page {
        width: 100%;
        display: grid;
        grid-template-columns: auto auto;
        place-items: center;
        gap: 60px;
    }
    @media (max-width: 1100px) {
        .about-page {
            grid-template-columns: auto;
            gap: 30px;
        }
    }
    .about-page .img-bg {
        width: 590px;
        height: 404px;
        border-radius: 32px;
        background: #eff2f8;
    }
    @media (max-width: 650px) {
        .about-page .img-bg {
            width: 100%;
            height: 246px;
        }
    }
    .about-page .img-bg img {
        width: 300px;
        -o-object-fit: contain;
        object-fit: contain;
    }
    @media (max-width: 650px) {
        .about-page .img-bg img {
            width: 250px;
        }
    }
    .about-page .text-blog {
        display: flex;
        flex-direction: column;
        gap: 24px;
        width: 100%;
    }
    @media (max-width: 650px) {
        .about-page .text-blog .my-btn {
            width: 100%;
        }
    }

    .news-slider {
        margin-top: 30px;
        position: relative;
    }
    .news-slider .slider-btn {
        position: absolute;
        z-index: 2;
        top: 50%;
        transform: translateY(-50%);
    }
    .news-slider .slider-btn.prev {
        left: -20px;
    }
    .news-slider .slider-btn.next {
        right: -20px;
    }

    .news-card {
        display: grid;
        grid-template-columns: auto;
        gap: 18px;
        transition: 0.2s;
        cursor: pointer;
    }
    .news-card.articles-card {
        width: 100%;
        display: grid;
        grid-template-columns: 196px auto;
        place-items: center;
    }
    @media (max-width: 700px) {
        .news-card.articles-card {
            grid-template-columns: 130px auto;
        }
    }
    @media (max-width: 700px) {
        .news-card.articles-card img {
            min-height: 100px;
        }
    }
    .news-card.news-mini {
        width: 100%;
        display: grid;
        grid-template-columns: 145px auto;
        place-items: center;
    }
    @media (max-width: 700px) {
        .news-card.news-mini {
            grid-template-columns: 130px auto;
        }
    }
    .news-card.news-mini:hover {
        transform: translateY(-5px);
    }
    .news-card.news-mini:hover .text-blog .txt-16 {
        color: #0162A7;
    }
    .news-card.news-mini img {
        width: 100%;
        border-radius: 12px;
        min-height: 107px;
    }
    @media (max-width: 700px) {
        .news-card.news-mini img {
            min-height: 100px;
        }
    }
    .news-card:hover {
        transform: translateY(-5px);
    }
    .news-card:hover .text-blog .txt-20 {
        color: #0162A7;
    }
    .news-card img {
        width: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        border-radius: 12px;
        height: 100%;
        max-height: 250px;
    }
    .news-card .text-blog {
        display: grid;
        grid-template-columns: auto;
        gap: 5px;
        width: 100%;
        padding-bottom: 12px;
    }
    .news-card .text-blog .txt-16 {
        font-weight: 300;
        color: #748291;
    }
    .news-card .text-blog .txt-20 {
        font-weight: 500;
        color: #1e2128;
        transition: 0.2s;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
    }
    .news-card .text-blog .txt-14 {
        font-weight: 300;
        color: #748291;
    }
    .news-card .text-blog .txt-16 {
        font-weight: 500;
        color: #1e2128;
        transition: 0.2s;
    }

    .NuxtClamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
    }

    .partnerClamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
    }

    .vakansia-card {
        width: 100%;
        display: grid;
        grid-template-columns: 285px auto;
        place-items: center;
        gap: 18px;
        transition: 0.2s;
        cursor: pointer;
    }
    @media (max-width: 650px) {
        .vakansia-card {
            grid-template-columns: auto;
        }
    }
    .vakansia-card.vakansia-mini {
        width: 100%;
        display: grid;
        grid-template-columns: 145px auto;
        place-items: center;
    }
    .vakansia-card.vakansia-mini:hover {
        transform: translateY(-5px);
    }
    .vakansia-card.vakansia-mini:hover .text-blog .txt-16 {
        color: #0162A7;
    }
    .vakansia-card.vakansia-mini img {
        width: 100%;
        border-radius: 12px;
        min-height: 107px;
    }
    .vakansia-card:hover {
        transform: translateY(-5px);
    }
    .vakansia-card:hover .text-blog .txt-18 {
        color: #0162A7;
    }
    .vakansia-card img {
        width: 100%;
        min-height: 187px;
        border-radius: 12px;
        border: 1px solid #d8e1ea;
    }
    .vakansia-card .text-blog {
        display: grid;
        grid-template-columns: auto;
        gap: 5px;
        width: 100%;
        padding-bottom: 12px;
    }
    .vakansia-card .text-blog .txt-16 {
        font-weight: 300;
        color: #748291;
    }
    .vakansia-card .text-blog .txt-18 {
        font-weight: 500;
        color: #1e2128;
        transition: 0.2s;
    }
    .vakansia-card .text-blog .txt-14 {
        font-weight: 300;
        color: #748291;
    }
    .vakansia-card .text-blog .txt-16 {
        font-weight: 500;
        color: #1e2128;
        transition: 0.2s;
    }

    .swiper {
        overflow-y: visible !important;
    }

    .time-sec {
        font-weight: 300;
        color: #748291;
    }

    .faq-page {
        background: #033960;
    }
    .faq-page .nav-text {
        color: #fff;
    }

    .contact-page {
        width: 100%;
        display: grid;
        grid-template-columns: auto 480px;
        gap: 30px;
    }
    @media (max-width: 1100px) {
        .contact-page {
            grid-template-columns: auto;
            gap: 30px;
        }
    }
    .contact-page .map {
        width: 100%;
        height: 100%;
        border-radius: 24px;
        filter: contrast(1);
    }
    @media (max-width: 1100px) {
        .contact-page .map {
            height: 400px !important;
        }
    }
    @media (max-width: 650px) {
        .contact-page .map {
            border-radius: 18px;
        }
    }
    @media (max-width: 700px) {
        .contact-page .map {
            min-height: 400px !important;
        }
    }
    .contact-page .my-form {
        border-radius: 24px;
        background: #f8fafd;
        padding: 30px;
        margin-top: 0;
    }
    @media (max-width: 650px) {
        .contact-page .my-form {
            border-radius: 18px;
            padding: 18px;
        }
    }
    .contact-page .my-form .my-input {
        background: #fff !important;
    }

    .partner-card {
        width: 100%;
        display: flex;
        align-items: center;
        flex-direction: column;
        gap: 18px;
    }
    .partner-card .top-img {
        width: 120px;
        height: 120px;
        background: #d8e1ea;
        border-radius: 50%;
        display: grid;
        place-items: center;
    }
    @media (max-width: 650px) {
        .partner-card .top-img {
            width: 100px;
            height: 100px;
        }
    }
    .partner-card .top-img img {
        width: 100px;
        height: 100px;
        -o-object-fit: contain;
        object-fit: contain;
        border-radius: 50%;
    }
    @media (max-width: 650px) {
        .partner-card .top-img img {
            width: 80px;
            height: 80px;
        }
    }
    .partner-card:hover .txt-14 {
        color: #0162A7;
    }
    .partner-card:hover .txt-16 {
        color: #0162A7;
    }
    .partner-card .txt-14 {
        color: #1e2128;
        text-align: center;
        font-weight: 500;
        transition: 0.2s;
    }
    .partner-card .txt-16 {
        color: #1e2128;
        text-align: center;
        font-weight: 500;
        transition: 0.2s;
    }

    .accordion-container {
        width: 100%;
        margin-top: 30px;
        display: grid;
        grid-template-columns: auto;
        gap: 12px;
    }
    .accordion-container .accordion-item {
        overflow: hidden;
        border-radius: 18px;
        background: rgba(255, 255, 255, 0.1);
        transition: 0.2s;
    }
    @media (max-width: 650px) {
        .accordion-container .accordion-item {
            border-radius: 12px;
        }
    }
    .accordion-container .accordion-item:hover {
        background: rgba(255, 255, 255, 0.08);
    }
    .accordion-container .accordion-item .accordion-header {
        transition: background-color 0.3s ease;
        place-items: center;
        position: relative;
        padding: 22px 24px 22px 60px;
        cursor: pointer;
    }
    @media (max-width: 650px) {
        .accordion-container .accordion-item .accordion-header {
            padding: 12px 12px 12px 50px;
        }
    }
    .accordion-container .accordion-item .accordion-header .txt-20 {
        width: 100%;
        color: #fff;
        font-weight: 600;
    }
    @media (max-width: 650px) {
        .accordion-container .accordion-item .accordion-header .txt-20 {
            font-size: 16px;
            font-weight: 500;
            line-height: 150%;
        }
    }
    .accordion-container .accordion-item .accordion-header.active .icon {
        transform: translateY(-50%) rotate(45deg);
    }
    .accordion-container .accordion-item .accordion-header .icon {
        transition: transform 0.3s ease;
        position: absolute;
        left: 12px;
        top: 50%;
        width: 40px;
        height: 40px;
        transform: translateY(-50%);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    @media (max-width: 650px) {
        .accordion-container .accordion-item .accordion-header .icon {
            left: 5px;
        }
    }
    @media (max-width: 650px) {
        .accordion-container .accordion-item .accordion-header .icon svg {
            width: 30px;
            height: 30px;
        }
    }
    .accordion-container .accordion-item .accordion-content {
        overflow: hidden;
        max-height: 0;
        transition: max-height 0.3s ease;
    }
    .accordion-container .accordion-item .accordion-content p {
        padding: 0px 24px 22px 60px;
        color: rgba(255, 255, 255, 0.8);
        font-weight: 400;
    }
    @media (max-width: 650px) {
        .accordion-container .accordion-item .accordion-content p {
            padding: 0px 12px 12px 50px;
        }
    }

    .partner-slider .swiper {
        overflow: visible !important;
    }

    .detail-page {
        width: 100%;
        padding: 30px 0 60px;
    }
    .detail-page .detail-page-in {
        width: 100%;
        display: grid;
        gap: 50px;
        grid-template-columns: 250px auto;
    }
    @media (max-width: 1100px) {
        .detail-page .detail-page-in {
            grid-template-columns: auto;
            gap: 30px;
        }
    }

    .our-services {
        display: grid;
        width: 100%;
        grid-template-columns: auto 300px;
        gap: 50px;
    }
    @media (max-width: 1150px) {
        .our-services {
            grid-template-columns: repeat(1, 1fr);
        }
    }
    .our-services__list {
        display: flex;
        flex-direction: column;
        gap: 24px;
        padding-left: 0;
    }
    .our-services .our-list__item {
        display: flex;
        gap: 12px;
        align-items: flex-start;
    }

    .sidebar {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 6px;
    }
    .sidebar .sidebar-menu {
        display: flex;
        flex-direction: column;
        margin-bottom: 0;
        padding-left: 0;
    }
    @media (max-width: 1100px) {
        .sidebar .sidebar-menu {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            align-items: center;
        }
    }
    .sidebar .sidebar-menu li {
        border-bottom: 1px solid #d8e1ea;
        position: relative;
        cursor: pointer;
    }
    @media (max-width: 1100px) {
        .sidebar .sidebar-menu li {
            border-bottom: none;
        }
    }
    .sidebar .sidebar-menu li .router-link-active .txt-18 {
        color: #0162A7;
    }
    .sidebar .sidebar-menu li .router-link-active .txt-18 svg path {
        fill: #0162A7;
    }
    .sidebar .sidebar-menu li .router-link-active:hover .txt-18 {
        color: #0162A7;
    }
    .sidebar .sidebar-menu li .router-link-active:hover .txt-18 svg path {
        fill: #0162A7;
    }
    .sidebar .sidebar-menu li:last-child {
        border-bottom: 1px solid transparent;
    }
    .sidebar .sidebar-menu li:first-child {
        border-top: 1px solid transparent;
    }
    .sidebar .sidebar-menu li .txt-18 {
        padding: 18px 0;
        color: #38434e;
        font-weight: 500;
        display: grid;
        grid-template-columns: 24px auto;
        place-items: center;
        gap: 5px;
        width: 100%;
        transition: 0.2s;
    }
    @media (max-width: 1100px) {
        .sidebar .sidebar-menu li .txt-18 {
            padding: 0;
            margin-bottom: 10px;
        }
    }
    @media (max-width: 650px) {
        .sidebar .sidebar-menu li .txt-18 {
            font-size: 14px;
            gap: 2px;
        }
    }
    .sidebar .sidebar-menu li .txt-18 span {
        width: 100%;
        text-align: start;
    }
    .sidebar .sidebar-menu li .txt-18 svg {
        transition: 0.2s;
    }
    @media (max-width: 650px) {
        .sidebar .sidebar-menu li .txt-18 svg {
            width: 18px;
            height: 18px;
        }
    }
    .sidebar .sidebar-menu li .txt-18 svg path {
        fill: #aebccb;
    }
    .sidebar .sidebar-menu li .txt-18:hover {
        color: #0162A7;
    }
    .sidebar .sidebar-menu li .txt-18:hover svg path {
        fill: #0162A7;
    }

    @media (max-width: 470px) {
        .user-card {
            flex-direction: column;
            height: auto;
            text-align: center;
        }
    }

    @media (max-width: 470px) {
        .user-desc {
            font-size: 12px;
        }
    }

    .base-img {
        width: 100%;
        max-width: 642px;
        border-radius: 24px;
    }

    .my-about {
        display: grid;
        grid-template-columns: auto;
        gap: 24px;
    }
    .my-about img {
        width: 100%;
    }

    .detail-in {
        display: flex;
        width: 100%;
        align-items: flex-start;
        gap: 50px;
    }
    @media (max-width: 720px) {
        .detail-in {
            flex-direction: column;
        }
    }
    .detail-in .left-content {
        width: 100%;
        display: grid;
        grid-template-columns: auto;
        gap: 18px;
    }
    .detail-in .right-content {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 18px;
    }

    .filial-card {
        border-radius: 24px;
        background: #f8fafd;
        padding: 24px;
    }

    .txt-20 {
        margin-bottom: 10px;
    }

    .line-conlact {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 24px;
        width: 100%;
    }
    .line-conlact-in {
        display: flex;
        width: -moz-max-content;
        width: max-content;
        align-items: center;
        gap: 4px;
    }
    .line-conlact-in p {
        display: flex;
        width: -moz-max-content;
        width: max-content;
        align-items: center;
        gap: 4px;
        color: #748291;
    }
    .line-conlact-in p span {
        color: #1e2128;
    }

    .mini-sidebar {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 24px;
    }
    .mini-sidebar .contact-icon {
        padding: 12px;
        border-radius: 8px;
        width: 100%;
    }
    .mini-sidebar .mini-sidebar-content {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }
    .mini-sidebar .mini-sidebar-content .news-mini {
        width: 100%;
        display: grid;
        grid-template-columns: 110px auto;
        place-items: center;
    }
    .mini-sidebar .mini-sidebar-content .news-mini:hover .text-blog .txt-14 {
        color: #0162A7;
    }
    .mini-sidebar .mini-sidebar-content .news-mini .txt-16 {
        font-size: 14px;
        font-weight: 600;
    }
    .mini-sidebar .mini-sidebar-content .news-mini img {
        width: 100%;
        border-radius: 12px;
        min-height: 80px;
    }

    .hujjat-card {
        display: grid;
        grid-template-columns: 30px auto;
        gap: 5px;
    }
    .hujjat-card .text-blog {
        width: 100%;
    }

    .menu-line {
        width: 100%;
        margin-bottom: 0;
        padding-left: 0;
    }
    .menu-line li {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        margin-top: 12px;
    }

    .menu-chek {
        width: 100%;
        margin-bottom: 0;
        padding-left: 0;
    }
    .menu-chek li {
        width: 100%;
        display: grid;
        grid-template-columns: 28px auto;
        gap: 10px;
        margin-top: 24px;
    }

    .contract-page {
        width: 100%;
        position: relative;
        display: grid;
        gap: 30px;
    }
    .contract-page .contract-form {
        width: 100%;
        background: #fff;
        margin-top: 0;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 18px;
    }
    @media (max-width: 700px) {
        .contract-page .contract-form {
            grid-template-columns: repeat(1, 1fr);
        }
    }
    @media (max-width: 700px) {
        .contract-page .contract-form .my-btn {
            width: 100%;
        }
    }

    @media (max-width: 700px) {
        .ariza-form .my-btn {
            width: 100%;
        }
    }

    .document-card {
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding: 18px;
        background: #f7fafd;
        border-radius: 12px;
    }

    .file-input {
        position: relative;
        width: 100%;
    }
    .file-input:before {
        content: "";
        position: absolute;
        left: 5px;
        top: 50%;
        transform: translateY(-50%);
        height: 80%;
        width: 147px;
        color: #fff;
        font-size: 16px;
        border-radius: 8px;
        text-align: center;
        padding: 8px 10px;
    }
    .file-input:invalid:before {
        content: "Iltimos fileni yuklang";
    }
    .file-input:valid:before {
        content: "Yuklash";
        background: #0162A7;
    }

    .map-section-bg {
        border-top: 1px solid #d0d5e0;
        border-bottom: 1px solid #d0d5e0;
    }

    .leaflet-control-attribution {
        display: none;
    }

    .map-section {
        display: grid;
        grid-template-columns: auto 450px;
        place-items: center;
        gap: 40px;
    }
    @media (max-width: 1100px) {
        .map-section {
            grid-template-columns: auto;
            margin: auto;
        }
    }
    .map-section .map-bg {
        width: 100%;
        height: auto;
        background: url("../img/map-big.png");
        background-position: top;
        background-size: cover;
    }
    .map-section .map-bg svg {
        width: 100%;
        transform: scale(0.97);
        transition: 0.2s;
        cursor: pointer;
    }
    .map-section .map-bg svg:hover {
        transform: scale(1);
    }
    @media (max-width: 650px) {
        .map-section .map-bg svg {
            height: 220px;
        }
    }
    .map-section .map-bg svg .my-g {
        fill: #b4b8c0;
    }
    .map-section .map-bg svg .my-g path {
        cursor: pointer;
        transition: 0.2s;
        stroke: #fff;
        stroke-width: 1;
    }
    .map-section .map-bg svg .my-g path:nth-child(2) {
        fill: #fff;
        pointer-events: none;
    }
    .map-section .map-bg svg .my-g path:hover {
        transition: 0.2s;
        fill: #0162A7;
        transform: translateY(-1px);
        box-shadow: 4px 4px 8px 0px rgba(34, 60, 80, 0.2);
    }
    .map-section .text-blog {
        border-radius: 24px;
        background: #ecf2f8;
    }
    @media (max-width: 1100px) {
        .map-section .text-blog {
            width: 100%;
        }
    }

    .mapInfo {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .infoMap {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        flex-direction: column;
    }
    .infoMap span {
        color: #1e2128;
        font-weight: 600;
        margin-top: 18px;
    }
    .infoMap .adress {
        display: flex;
        width: 205px;
    }

    .bottom-con {
        width: 100%;
        margin-top: 18px;
        display: flex;
        align-items: center;
        width: 100%;
        gap: 4px;
    }
    .bottom-con p {
        display: flex;
        width: 100%;
        min-width: -moz-max-content;
        min-width: max-content;
        align-items: center;
        justify-content: space-between;
        gap: 4px;
        color: #748291;
    }

    .social-box {
        position: fixed;
        right: 0;
        top: 250px;
        z-index: 10;
        border-radius: 8px 0px 0px 8px;
        background: #fff;
        box-shadow: 0px 4px 18px 0px rgba(142, 167, 216, 0.25);
        padding: 12px;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    @media (max-width: 650px) {
        .social-box {
            display: none;
        }
    }
    .social-box .btn-social {
        width: 32px;
        height: 32px;
        border: none;
        outline: none;
        display: grid;
        place-items: center;
        border-radius: 8px;
        transition: 0.2s;
        background: rgba(5, 95, 201, 0.1);
    }
    .social-box .btn-social.active {
        background: #0162A7;
    }
    .social-box .btn-social.active svg path {
        fill: #fff;
    }
    .social-box .btn-social svg {
        transition: 0.2s;
    }
    .social-box .btn-social svg path {
        fill: #0162A7;
    }
    .social-box .main-rel {
        position: relative;
    }
    .social-box .main-rel.text {
        z-index: 3;
    }
    .social-box .main-rel.color {
        z-index: 1;
    }
    .social-box .main-rel .text-size-bloc {
        min-height: 110px;
        box-shadow: 0px 4px 18px 0px rgba(142, 167, 216, 0.25);
        opacity: 0;
        pointer-events: none;
        position: absolute;
        right: -12px;
        top: -8px;
        padding: 12px;
        padding: 12px 68px 12px 12px;
        border-radius: 8px 0px 0px 8px;
        background: #fff;
        width: 240px;
        display: flex;
        flex-direction: column;
        gap: 12px;
        z-index: -2;
        margin-right: -10px;
        transition: 0.2s;
    }
    .social-box .main-rel .text-size-bloc.active {
        opacity: 1;
        margin-right: 0px;
        pointer-events: visible;
    }
    .social-box .main-rel .color-body {
        box-shadow: 0px 4px 18px 0px rgba(142, 167, 216, 0.25);
        opacity: 0;
        pointer-events: none;
        position: absolute;
        right: -12px;
        top: -50%;
        padding: 12px;
        padding: 12px 68px 12px 12px;
        border-radius: 8px 0px 0px 8px;
        background: #fff;
        width: 240px;
        min-height: 110px;
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-right: -10px;
        z-index: -1;
        transition: 0.2s;
    }
    .social-box .main-rel .color-body .color-block {
        display: grid;
        grid-template-columns: auto auto auto;
        gap: 12px;
    }
    .social-box .main-rel .color-body .color-block .bloc {
        display: grid;
        grid-template-columns: auto;
        place-items: center;
        gap: 5px;
    }
    .social-box .main-rel .color-body .color-block .bloc.active .top svg {
        opacity: 1;
    }
    .social-box .main-rel .color-body .color-block .bloc.active .txt-12 {
        color: #0162A7;
    }
    .social-box .main-rel .color-body .color-block .bloc .top {
        width: 32px;
        height: 32px;
        border-radius: 5px;
        background: #0162A7;
        display: grid;
        grid-template-columns: auto;
        place-items: center;
    }
    .social-box .main-rel .color-body .color-block .bloc .top svg {
        transition: 0.2s;
        opacity: 0;
    }
    .social-box .main-rel .color-body .color-block .bloc .top svg path {
        fill: #fff;
    }
    .social-box .main-rel .color-body .color-block .bloc .top.gray {
        background: #b4b4b4;
    }
    .social-box .main-rel .color-body .color-block .bloc .top.dark {
        background: #272727;
    }
    .social-box .main-rel .color-body .color-block .bloc .txt-12 {
        text-align: center;
        transition: 0.2s;
    }
    .social-box .main-rel .color-body.active {
        opacity: 1;
        margin-right: 0px;
        pointer-events: visible;
    }

    .loader-bg {
        position: fixed;
        width: 100%;
        height: 100vh;
        z-index: 101;
        display: grid;
        grid-template-columns: auto;
        place-items: center;
        background: rgb(1, 98, 167);
        background: radial-gradient(circle, rgb(1, 98, 167) 0%, rgb(3, 57, 96) 100%);
    }

    .loader1 {
        --speed: 1000ms;
        position: relative;
        z-index: 101;
        font-size: 5.5em;
    }
    .loader1 .tile {
        width: 1em;
        height: 1em;
        animation: var(--speed) ease infinite jump;
        transform-origin: 0 100%;
        will-change: transform;
        position: relative;
    }
    .loader1 .tile::before {
        content: "";
        display: block;
        width: inherit;
        height: inherit;
        border-radius: 0.15em;
        background-color: #fff;
        animation: var(--speed) ease-out infinite spin;
        will-change: transform;
    }
    .loader1 .tile img {
        display: block;
        width: 60px;
        -o-object-position: center;
        object-position: center;
        -o-object-fit: contain;
        object-fit: contain;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .loader1::after {
        content: "";
        display: block;
        width: 1.1em;
        height: 0.2em;
        background-color: #033960;
        border-radius: 60%;
        position: absolute;
        left: -0.05em;
        bottom: -0.1em;
        z-index: -1;
        animation: var(--speed) ease-in-out infinite shadow;
        filter: blur(0.02em);
        will-change: transform filter;
    }
    @keyframes jump {
        0% {
            transform: scaleY(1) translateY(0);
        }
        16% {
            transform: scaleY(0.6) translateY(0);
        }
        22% {
            transform: scaleY(1.2) translateY(-5%);
        }
        24%, 62% {
            transform: scaleY(1) translateY(-33%);
        }
        66% {
            transform: scaleY(1.2) translateY(0);
        }
        72% {
            transform: scaleY(0.8) translateY(0);
        }
        88% {
            transform: scaleY(1) translateY(0);
        }
    }
    @keyframes spin {
        0%, 18% {
            transform: rotateZ(0);
            border-radius: 0.15em;
        }
        38% {
            border-radius: 0.25em;
        }
        66%, 100% {
            transform: rotateZ(1turn);
            border-radius: 0.15em;
        }
    }
    @keyframes shadow {
        0% {
            transform: scale(1);
            filter: blur(0.02em);
        }
        25%, 60% {
            transform: scale(0.8);
            filter: blur(0.06em);
        }
        70% {
            transform: scale(1.1);
            filter: blur(0.02em);
        }
        90% {
            transform: scale(1);
        }
    }
    .loader1 :root {
        box-sizing: border-box;
        height: 100%;
        -webkit-font-smoothing: antialiased;
        background-color: var(--color-root, hsl(210, 18%, 44%));
        color: var(--color-text, hsl(210, 15%, 96%));
        background-image: radial-gradient(rgba(255, 255, 255, 0.2666666667), rgba(255, 255, 255, 0));
    }

    .v-enter-active,
    .v-leave-active {
        transition: opacity 0.5s ease;
    }

    .v-enter-from,
    .v-leave-to {
        opacity: 0;
    }

    .detail-modal {
        width: 100%;
        max-width: 900px;
        height: auto;
        padding: 10px 20px;
        box-shadow: 0 0 10px #000;
        border-radius: 30px;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: white;
        z-index: 100;
    }

    .table_component {
        overflow: auto;
        width: 100%;
    }

    .table_component table {
        border: 1px solid #dededf;
        height: 100%;
        width: 100%;
        table-layout: fixed;
        border-collapse: collapse;
        border-spacing: 1px;
        text-align: left;
    }

    .table_component caption {
        caption-side: top;
        text-align: left;
    }

    .table_component th {
        border: 1px solid #dededf;
        background-color: #eceff1;
        color: #000000;
        padding: 5px;
    }

    .table_component td {
        border: 1px solid #dededf;
        background-color: #ffffff;
        color: #000000;
        padding: 5px;
    }

    .table-user-box {
        border-radius: 12px;
    }
    @media (max-width: 770px) {
        .table-user-box {
            width: 700px;
        }
    }
    @media (max-width: 760px) {
        .table-user-box {
            width: 600px;
        }
    }
    @media (max-width: 610px) {
        .table-user-box {
            width: 500px;
        }
    }
    @media (max-width: 560px) {
        .table-user-box {
            width: 460px;
        }
    }
    @media (max-width: 515px) {
        .table-user-box {
            width: 350px;
        }
    }
    @media (max-width: 414px) {
        .table-user-box {
            margin-left: -20px;
            width: 320px;
        }
    }

    @media (max-width: 1030px) {
        .table-user {
            width: 1000px;
        }
    }

    .buttonInfo:hover svg path {
        fill: white;
        transition: 0.2s linear;
    }

    .aplication-form {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 24px;
    }
    @media (max-width: 700px) {
        .aplication-form {
            flex-direction: column;
        }
    }
    .aplication-form__item {
        display: flex;
        flex-direction: column;
        gap: 12px;
        position: relative;
        width: 100%;
        max-width: 421px;
    }
    @media (max-width: 1246px) {
        .aplication-form__item {
            max-width: 400px;
        }
    }
    @media (max-width: 1204px) {
        .aplication-form__item {
            max-width: 350px;
        }
    }
    @media (max-width: 803px) {
        .aplication-form__item {
            max-width: 310px;
        }
    }
    @media (max-width: 780px) {
        .aplication-form__item {
            max-width: 310px;
        }
    }
    @media (max-width: 724px) {
        .aplication-form__item {
            max-width: 421px;
        }
    }
    @media (max-width: 700px) {
        .aplication-form__item {
            max-width: 100%;
        }
    }
    .aplication-form__label {
        color: #596375;
    }
    .aplication-form__input {
        height: 48px;
        background: #F7FAFD;
    }

    .inputFile {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 5px;
        width: 111px;
        height: 38px;
        background: #38434E;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        border-radius: 12px;
        z-index: 2;
    }

    .hidden-input {
        pointer-events: none;
        opacity: 0;
        position: relative;
    }

    .file-name {
        position: absolute;
        top: 50%;
        left: 18px;
        opacity: 0.4;
        transform: translateY(-50%);
        z-index: 1;
    }

    .input-textAre {
        width: 100%;
        max-width: 870px;
    }
    @media (max-width: 1204px) {
        .input-textAre {
            max-width: 730px;
        }
    }
    @media (max-width: 780px) {
        .input-textAre {
            max-width: 650px;
        }
    }
    @media (max-width: 700px) {
        .input-textAre {
            width: 100%;
        }
    }
    .input-textAre__item {
        width: 100%;
        height: 80px;
        display: flex;
        overflow: hidden;
    }

    #test {
        position: relative;
    }/*# sourceMappingURL=main.css.map */
</style>
