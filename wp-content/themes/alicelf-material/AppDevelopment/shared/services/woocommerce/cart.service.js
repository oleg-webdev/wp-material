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
var core_1 = require('@angular/core');
var http_1 = require('@angular/http');
require('rxjs/Rx');
var app_settings_service_1 = require("../app.settings.service");
var CartService = (function () {
    function CartService(http, appSettings) {
        this.http = http;
        this.products = [];
        this.cartEmpty = true;
        this.ajaxurl = appSettings.settings.ajaxurl;
    }
    CartService.prototype.GetProducts = function () {
        var queryUrl = this.ajaxurl + "?action=ajx20161412071430";
        return this.http.get(queryUrl)['map'](function (response) { return response.json(); });
    };
    CartService = __decorate([
        core_1.Injectable(), 
        __metadata('design:paramtypes', [http_1.Http, app_settings_service_1.AppSettingsService])
    ], CartService);
    return CartService;
}());
exports.CartService = CartService;
//# sourceMappingURL=cart.service.js.map