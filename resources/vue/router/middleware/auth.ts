import {MiddlewareContext} from "../types";

export default async function ({next}: MiddlewareContext) {
    return next()
}
