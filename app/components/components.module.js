"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
const core_1 = require("@angular/core");
const common_1 = require("@angular/common");
const carousel_component_1 = require("./carousel/carousel.component");
// import { FooterComponent } from './footer/footer.component';
const header_component_1 = require("./header/header.component");
const lead_component_1 = require("./lead/lead.component");
let ComponentsModule = class ComponentsModule {
};
ComponentsModule = __decorate([
    core_1.NgModule({
        imports: [
            common_1.CommonModule,
        ],
        declarations: [
            carousel_component_1.CarouselComponent,
            header_component_1.HeaderComponent,
            lead_component_1.LeadComponent,
        ],
        exports: [
            carousel_component_1.CarouselComponent,
            header_component_1.HeaderComponent,
            lead_component_1.LeadComponent,
        ]
    })
], ComponentsModule);
exports.ComponentsModule = ComponentsModule;
//# sourceMappingURL=components.module.js.map