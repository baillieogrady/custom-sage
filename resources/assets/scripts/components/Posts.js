import React from 'react'
import axios from 'axios'

import Post from './Post'

export default class Posts extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      posts: [],
    }
  }

  componentDidMount() {
    axios.get('/wp-json/wp/v2/posts')
    .then(response => this.setState({ posts: response.data }))
    .catch(err => console.log(err))
  }
 
  render() {
    console.log(this.state)
    return (
      <div>
        {this.state.posts.length > 0 ?
          this.state.posts.map((post) => {
            return <Post key={post.id} data={post}/>
          })
        :
          <h1>Loading ...</h1>
      }
    </div>
    )
  }
}