import axios from "../plugins/axios";
import {Category} from "../stores/site";

type Translate = {
    en: string,
    de: string,
    fr: string,
    es: string,
    it: string,
}

interface CategoryShow extends Category {
    desc: Translate,
    seo: {
        title: Translate,
        desc: Translate,
    }
}

export type Product = {
    id: number,
    name: Translate,
    slug: string,
    images: string[],
    price: number,
    category: Category
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

interface ProductShow extends Product {
    short_desc: Translate,
    desc: Translate,
    seo: {
        title: Translate,
        desc: Translate,
    },
    active_ingredients: string[],
    extra_other_names: string[],
    packs: {
        id: number,
        type: string,
        dose: number,
        price: number,
        quantity: number,
        measure: string,
        bestseller: boolean,
    }[]
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
