import fs from "fs";

import express from "express";

export default class FrontendUI {
    static #lang = null;

    static get lang(){ return FrontendUI.#lang; }

    static {
        FrontendUI.#lang = JSON.parse(fs.readFileSync("./src/lang/en.json", { encoding: "utf-8" }));
    }

    #path = null;
    #router = express.Router();

    get path(){ return this.#path; }
    get router(){ return this.#router; }

    constructor(path) {
        this.#path = path;
    }
}
