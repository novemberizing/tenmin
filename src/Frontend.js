import ejs from "ejs";
import express from "express";
import path from "path";

import Log from "./Log.js";

import FrontendUI from "./frontend/FrontendUI.js";

export default class Frontend {
    static #tag = "Frontend";

    static #map = new Map();
    static #view = null;

    static view(path) {
        Frontend.#view = path;
    }

    static set(c) {
        Log.v(Frontend.#tag, "Frontend.set(c)");

        let parent = Object.getPrototypeOf(c);

        while(parent && parent.name) {
            if(parent === FrontendUI) {
                Frontend.#map.set(parent.name, c);
                break;
            }

            parent = Object.getPrototypeOf(parent);
        }
    }
    
    static on(application) {
        Log.v(Frontend.#tag, "Frontend.on()");

        application.engine('.html', ejs.__express);
        application.set('view engine', 'ejs');
        application.set('views', Frontend.#view);

        // 어플리케이션에서 HTML이나 EJS 템플릿으로 접근하지 못하도록 한다.
        application.use((req, res, next) => {
            const extension = path.extname(req.originalUrl);

            if(extension === '.ejs' || extension === '.html') {
                res.status(404).end();
                return;
            }

            next();
        });

        for(const Type of Frontend.#map.values()) {
            const ui = new Type();

            application.use(ui.path, ui.router);
        }

        application.use("/", express.static(Frontend.#view));
    }
}