import axios from "../plugins/axios";

import {Category, Product, ProductShow, Translate} from "../stores/types";

interface CategoryShow extends Category {
    desc: Translate,
    seo: {
        title: Translate,
        desc: Translate,
    }
}

type ApiProductsResponse = {
    data: Product[],
    current_page: number,
    last_page: number,
    next_page_url: string | null,
    prev_page_url: string | null,
    links: {
        url: string,
        label: string,
        active: boolean
    }[],
    per_page: number,
    total: number,
}

type ApiCategoryResponse = {
    category: CategoryShow,
    products: ApiProductsResponse
}

type ApiProductResponse = {
    data: ProductShow
}

export const ApiCategory = async (slug: string, page: number): Promise<ApiCategoryResponse> => await axios.get('categories/' + slug, {
    params: {
        page: page
    }
}).then(response => response.data)

export const ApiProducts = async (page: number): Promise<ApiProductsResponse> => await axios.get('products', {
    params: {
        page: page
    }
}).then(response => response.data)

export const ApiProduct = async (slug: string): Promise<ApiProductResponse> => await axios.get('products/' + slug)
    .then(response => response.data)
