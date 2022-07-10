import React from 'react'
import './style.css'


export const  Category = ({category, image}) => {
    return (
        <figure className='category'>
            <img src={image} alt={category} id={category} />
            <figcaption>{category}</figcaption>
        </figure>
    )
}
