<style type="text/css">
  .navbar-fixed {
  position: relative;
  height: 56px;
  z-index: 997;
  }

  .navbar-fixed nav {
    position: fixed;
  }

  .navbar-fixed {
    height: 64px;
  }
}

@font-face {
  font-family: "Roboto";
  src: local(Roboto Thin), url("../fonts/roboto/Roboto-Thin.eot");
  src: url("../fonts/roboto/Roboto-Thin.eot?#iefix") format("embedded-opentype"), url("../fonts/roboto/Roboto-Thin.woff2") format("woff2"), url("../fonts/roboto/Roboto-Thin.woff") format("woff"), url("../fonts/roboto/Roboto-Thin.ttf") format("truetype");
  font-weight: 200;
}

@font-face {
  font-family: "Roboto";
  src: local(Roboto Light), url("../fonts/roboto/Roboto-Light.eot");
  src: url("../fonts/roboto/Roboto-Light.eot?#iefix") format("embedded-opentype"), url("../fonts/roboto/Roboto-Light.woff2") format("woff2"), url("../fonts/roboto/Roboto-Light.woff") format("woff"), url("../fonts/roboto/Roboto-Light.ttf") format("truetype");
  font-weight: 300;
}

@font-face {
  font-family: "Roboto";
  src: local(Roboto Regular), url("../fonts/roboto/Roboto-Regular.eot");
  src: url("../fonts/roboto/Roboto-Regular.eot?#iefix") format("embedded-opentype"), url("../fonts/roboto/Roboto-Regular.woff2") format("woff2"), url("../fonts/roboto/Roboto-Regular.woff") format("woff"), url("../fonts/roboto/Roboto-Regular.ttf") format("truetype");
  font-weight: 400;
}

@font-face {
  font-family: "Roboto";
  src: url("../fonts/roboto/Roboto-Medium.eot");
  src: url("../fonts/roboto/Roboto-Medium.eot?#iefix") format("embedded-opentype"), url("../fonts/roboto/Roboto-Medium.woff2") format("woff2"), url("../fonts/roboto/Roboto-Medium.woff") format("woff"), url("../fonts/roboto/Roboto-Medium.ttf") format("truetype");
  font-weight: 500;
}

@font-face {
  font-family: "Roboto";
  src: url("../fonts/roboto/Roboto-Bold.eot");
  src: url("../fonts/roboto/Roboto-Bold.eot?#iefix") format("embedded-opentype"), url("../fonts/roboto/Roboto-Bold.woff2") format("woff2"), url("../fonts/roboto/Roboto-Bold.woff") format("woff"), url("../fonts/roboto/Roboto-Bold.ttf") format("truetype");
  font-weight: 700;
}

nav.nav-extended .nav-wrapper {
  min-height: 56px;
  height: auto;
}

nav .nav-wrapper {
  position: relative;
  height: 100%;
}

@media only screen and (min-width: 601px) {
  nav.nav-extended .nav-wrapper {
    min-height: 64px;
  }
  nav, nav .nav-wrapper i, nav a.button-collapse, nav a.button-collapse i {
    height: 64px;
    line-height: 64px;
  }
  .navbar-fixed {
    height: 64px;
  }
}

.z-depth-1, nav, .card-panel, .card, .toast, .btn, .btn-large, .btn-floating, .dropdown-content, .collapsible, .side-nav {
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
}

nav ul a span.badge {
  display: inline-block;
  float: none;
  margin-left: 4px;
  line-height: 22px;
  height: 22px;
}

.side-nav span.badge {
  margin-top: calc(24px - 11px);
}

nav {
  color: #fff;
  background-color: #ee6e73;
  width: 100%;
  height: 56px;
  line-height: 56px;
}

nav.nav-extended {
  height: auto;
}

nav.nav-extended .nav-wrapper {
  min-height: 56px;
  height: auto;
}

nav.nav-extended .nav-content {
  position: relative;
  line-height: normal;
}

nav a {
  color: #fff;
}

nav i,
nav [class^="mdi-"], nav [class*="mdi-"],
nav i.material-icons {
  display: block;
  font-size: 24px;
  height: 56px;
  line-height: 56px;
}

nav .nav-wrapper {
  position: relative;
  height: 100%;
}

@media only screen and (min-width: 993px) {
  nav a.button-collapse {
    display: none;
  }
}

nav .button-collapse {
  float: left;
  position: relative;
  z-index: 1;
  height: 56px;
  margin: 0 18px;
}

nav .button-collapse i {
  height: 56px;
  line-height: 56px;
}

nav .brand-logo {
  position: absolute;
  color: #fff;
  display: inline-block;
  font-size: 2.1rem;
  padding: 0;
  white-space: nowrap;
}

nav .brand-logo.center {
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
}

@media only screen and (max-width: 992px) {
  nav .brand-logo {
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  nav .brand-logo.left, nav .brand-logo.right {
    padding: 0;
    -webkit-transform: none;
            transform: none;
  }
  nav .brand-logo.left {
    left: 0.5rem;
  }
  nav .brand-logo.right {
    right: 0.5rem;
    left: auto;
  }
}

nav .brand-logo.right {
  right: 0.5rem;
  padding: 0;
}

nav .brand-logo i,
nav .brand-logo [class^="mdi-"], nav .brand-logo [class*="mdi-"],
nav .brand-logo i.material-icons {
  float: left;
  margin-right: 15px;
}

nav .nav-title {
  display: inline-block;
  font-size: 32px;
  padding: 28px 0;
}

nav ul {
  margin: 0;
}

nav ul li {
  transition: background-color .3s;
  float: left;
  padding: 0;
}

nav ul li.active {
  background-color: rgba(0, 0, 0, 0.1);
}

nav ul a {
  transition: background-color .3s;
  font-size: 1rem;
  color: #fff;
  display: block;
  padding: 0 15px;
  cursor: pointer;
}

nav ul a.btn, nav ul a.btn-large, nav ul a.btn-large, nav ul a.btn-flat, nav ul a.btn-floating {
  margin-top: -2px;
  margin-left: 15px;
  margin-right: 15px;
}

nav ul a.btn > .material-icons, nav ul a.btn-large > .material-icons, nav ul a.btn-large > .material-icons, nav ul a.btn-flat > .material-icons, nav ul a.btn-floating > .material-icons {
  height: inherit;
  line-height: inherit;
}

nav ul a:hover {
  background-color: rgba(0, 0, 0, 0.1);
}

nav ul.left {
  float: left;
}

nav form {
  height: 100%;
}

nav .input-field {
  margin: 0;
  height: 100%;
}

nav .input-field input {
  height: 100%;
  font-size: 1.2rem;
  border: none;
  padding-left: 2rem;
}

nav .input-field input:focus, nav .input-field input[type=text]:valid, nav .input-field input[type=password]:valid, nav .input-field input[type=email]:valid, nav .input-field input[type=url]:valid, nav .input-field input[type=date]:valid {
  border: none;
  box-shadow: none;
}

nav .input-field label {
  top: 0;
  left: 0;
}

nav .input-field label i {
  color: rgba(255, 255, 255, 0.7);
  transition: color .3s;
}

nav .input-field label.active i {
  color: #fff;
}

.navbar-fixed {
  position: relative;
  height: 56px;
  z-index: 997;
}

.navbar-fixed nav {
  position: fixed;
}

@media only screen and (min-width: 601px) {
  nav.nav-extended .nav-wrapper {
    min-height: 64px;
  }
  nav, nav .nav-wrapper i, nav a.button-collapse, nav a.button-collapse i {
    height: 64px;
    line-height: 64px;
  }
  .navbar-fixed {
    height: 64px;
  }
}

nav .brand-logo {
  position: absolute;
  color: #fff;
  display: inline-block;
  font-size: 2.1rem;
  padding: 0;
  white-space: nowrap;
}

nav .brand-logo.center {
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
}

@media only screen and (max-width: 992px) {
  nav .brand-logo {
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  nav .brand-logo.left, nav .brand-logo.right {
    padding: 0;
    -webkit-transform: none;
            transform: none;
  }
  nav .brand-logo.left {
    left: 0.5rem;
  }
  nav .brand-logo.right {
    right: 0.5rem;
    left: auto;
  }
}

nav .brand-logo.right {
  right: 0.5rem;
  padding: 0;
}

nav .brand-logo i,
nav .brand-logo [class^="mdi-"], nav .brand-logo [class*="mdi-"],
nav .brand-logo i.material-icons {
  float: left;
  margin-right: 15px;
}
</style>

<div class="navbar-fixed">
  <nav class="z-depth-2">
    <div class="nav-wrapper">
      <a href="http://localhost/ProjectWebDinamis_JBG" class="brand-logo">&nbsp <?php echo $title ?></a>
    </div>
  </nav>
</div>
<br-->