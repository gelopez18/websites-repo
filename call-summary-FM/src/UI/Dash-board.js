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
          <a class="nav-link active" aria-current="page" href="#">${link.title}</a>
        </li>`;
      return `
      
      <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
        <h5 class="text-white h4">Collapsed content</h5>
        <span class="text-muted">Toggleable via the navbar brand.</span>
      </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
   
    <main  role="main" class="mdl-layout__content container col-md-9 ml-sm-auto col-lg-10 px-4" >
      <div class="page-content"><!-- Your content goes here --></div>
    </main>

      `;
  }


}
