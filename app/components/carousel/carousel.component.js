"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : new P(function (resolve) { resolve(result.value); }).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
const core_1 = require("@angular/core");
let CarouselComponent = class CarouselComponent {
    constructor() {
        this.listImg = [];
        this.listVisible = [];
        this.index = 0;
        this.visibleItens = 3;
        this.request();
    }
    request() {
        return __awaiter(this, void 0, void 0, function* () {
            let request = {
                "method": 'GET',
                "headers": {
                    'Accept': 'application/json'
                },
            };
            const url = "https://jsonplaceholder.typicode.com/photos";
            const rawResponse = yield fetch(url, request).then(resp => resp.json()).then(data => {
                if (data) {
                    this.listImg = data;
                    console.log(this.listImg);
                    this.cutList();
                }
            });
        });
    }
    prev() {
        if (this.listImg[this.index - 1]) {
            this.index--;
            this.cutList();
        }
    }
    next() {
        if (this.listImg[this.index + 3]) {
            this.index++;
            this.cutList();
        }
    }
    cutList() {
        this.listVisible = this.listImg.slice(this.index, this.index + 3);
    }
};
CarouselComponent = __decorate([
    core_1.Component({
        moduleId: module.id,
        selector: 'app-carousel',
        templateUrl: 'carousel.component.html',
        styleUrls: ['carousel.component.scss']
    }),
    __metadata("design:paramtypes", [])
], CarouselComponent);
exports.CarouselComponent = CarouselComponent;
//# sourceMappingURL=carousel.component.js.map