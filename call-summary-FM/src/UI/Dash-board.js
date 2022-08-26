import { BaseElement } from "./base-element.js";

export class DashBoard extends BaseElement{
    constructor(title){
        super();
        this.title=title;
        this.links =[];
    }
    addlink(title, href){
        this.links.push({
            title, href
        })
    }

    getElementString() {
      let links = '';
      for (let link of this.links) //watch for the Href
          links += `<li class="nav-item">
          <a class="nav-link active mdl-navigation__link" aria-current="page" >${link.title}</a>
        </li>
       `;
      return `
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            ${links}
          </ul>

        </div>
      </div>
    </nav>
    <main  role="main" class="mdl-layout__content container col-md-9 ml-sm-auto col-lg-10 px-4" >
      <div class="page-content"><!-- Your content goes here --></div>
    </main>

      `;
  }


}
