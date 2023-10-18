import Application from "./Application.js";
import Frontend from "./Frontend.js";
import Backend from "./Backend.js";

import FrontendRoot from "./frontend/FrontendRoot.js";

// EJS ROOT
Frontend.view("./src/view/");

Frontend.set(FrontendRoot);

Application.set(Frontend);
Application.set(Backend);

Application.run();
