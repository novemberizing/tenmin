import FrontendUI from "./FrontendUI.js";

export default class FrontendRoot extends FrontendUI {

    constructor() {
        super("/");

        this.router.get("/", this.root);
    }

    root(req, res) {
        res.render("index.html", { lang: FrontendUI.lang });
    }
}