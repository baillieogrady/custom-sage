import React from 'react'
import PropTypes from 'prop-types';

const Post = (props) => {
    const { title, excerpt, link } = props.data;

    return (
      <div>
        {title.rendered}
        <div dangerouslySetInnerHTML={{__html: excerpt.rendered}}/>
        <a href={link}>Read more ...</a>
      </div>
    )
}

Post.propTypes = {
    data: PropTypes.object,
};

export default Post