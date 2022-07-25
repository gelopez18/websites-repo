import { BaseElement } from "./base-element.js";

export class NavBar extends BaseElement{
    constructor(Title){
        super();
        this.Title=Title;
        this.links =[];
    }
    addlink(title, href){
        this.links.push({
            title, href
        })
    }
       
    getElementString() {
        let links = '';
        for (let link of this.links)
            links += `<a class = "mdl-navigation_link" href= "${link.href}">${link.title}</a>\n`;
        return `
       
        <!-- Uses a transparent header that draws on top of the layout's background -->
<style>
.demo-layout-transparent {
  background: url('../assets/demos/transparent.jpg') center / cover;
}
.demo-layout-transparent .mdl-layout__header,
.demo-layout-transparent .mdl-layout__drawer-button {
  /* This background is dark, so we set text to white. Use 87% black instead if
     your background is light. */
  color: white;
}
</style>

<div class="demo-layout-transparent mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">${this.Title}</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
                    ${links}
                    </nav>
                    </div>
                  </header>
                  <div class="mdl-layout__drawer">
                    <span class="mdl-layout-title">${this.Title}</span>
            <nav class="mdl-navigation">
                ${links}
                </nav>
                </div>
                <main class="mdl-layout__content">
                </main>
              </div>
        `;
    }


}