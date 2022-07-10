import React from 'react'
import { useServlet } from "../../context/ServletContext";
import { Category } from "../Category";
import './style.css'

export const  CategoriesV = () => {
    const categories = useServlet()
    console.log(categories);
    return (
        <section className='categories_container'>
        {categories.categories.map((category, image) => <Category {...category} {...image} /> )}
        </section>
    )
}

