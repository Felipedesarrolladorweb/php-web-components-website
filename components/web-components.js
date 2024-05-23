// Register custom elements
class HeaderComponent extends HTMLElement {
    constructor() {
      super();
      const template = document.getElementById('header-template');
      const shadowRoot = this.attachShadow({ mode: 'open' });
      shadowRoot.appendChild(template.content.cloneNode(true));
    }
  }
  
  class FooterComponent extends HTMLElement {
    constructor() {
      super();
      const template = document.getElementById('footer-template');
      const shadowRoot = this.attachShadow({ mode: 'open' });
      shadowRoot.appendChild(template.content.cloneNode(true));
    }
  }
  
  customElements.define('header-component', HeaderComponent);
  customElements.define('footer-component', FooterComponent);
  