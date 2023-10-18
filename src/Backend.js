import Log from "./Log.js";

export default class Backend {
    static #tag = "Backend";
    
    static on(application) {
        Log.v(Backend.#tag, "Backend.on()");
    }
}
