import axios from "../plugins/axios";

import {Article, Translate} from "../stores/types";

type ApiArticlesResponse = {
    data: Article[],
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

export interface ArticleShow extends Article {
    content: Translate,
    tags: [],
    prev_article_slug: string,
    next_article_slug: string,
}

type ApiArticleResponse = {
    data: ArticleShow
}

export const ApiArticles = async (page: number): Promise<ApiArticlesResponse> => await axios.get('articles', {
    params: {
        page: page
    }
}).then(response => response.data)

export const ApiArticle = async (slug: string): Promise<ApiArticleResponse> => await axios.get('articles/' + slug)
    .then(response => response.data)
