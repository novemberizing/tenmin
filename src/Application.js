import express from "express";

import Frontend from "./Frontend.js";
import Backend from "./Backend.js";

import Log from "./Log.js";

export default class Application {
    static #tag = "Application";

    static #express = null;
    static #port = 8080;
    static #frontend = null;
    static #backend = null;

    static set(c) {
        Log.v(Application.#tag, "Application.set(c)");

        if(c === Frontend) {
            Application.#frontend = Frontend;
        } else if(c === Backend) {
            Application.#backend = Backend;
        }
    }

    static run() {
        Log.v(Application.#tag, "Application.run()");

        if(Application.#express === null) {
            Application.#express = express();
            // TODO: INITIALIZE CODE
            Application.#frontend.on(Application.#express);
            Application.#backend.on(Application.#express);

            // EXAMPLE CODE:
            // Application.#express.get("/", (req, res) => {
            //     res.send({ message: "hello world"});
            // });

            Application.#express.listen(Application.#port, () => {
                console.log("Application run.");
            });
        }
    }
}
