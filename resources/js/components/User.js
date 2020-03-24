import React from 'react';
import ReactDOM from 'react-dom';

export default class User extends React.Component {
    constructor (props) {
        super(props);
        console.log("props:", this.props);
        this.state={
          'name': props.name,
          'email': props.email,
          'email_ver': props.email_verified_at,
        };
    } 
    render() { 
        const style = {
            height: '100vh',
        } 
        return (
            <div className="container" style={style}>
                <div className="row h-100 justify-content-center align-items-center">
                    <div className="col-md-8">
                        <div className="card mt-4">
                            <div className="card-header bg-primary text-white"><b>Name : </b> {this.state.name}</div>

                            <div className="card-body">
                                <div className="my-2"><b>Email : </b> {this.state.email}</div>
                                <div className="my-2"><b>Email verifed at : </b> {this.state.email_ver}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
  }    
}


if (document.getElementById('user')) {
    const element = document.getElementById('user');
    const data = Object.assign({}, element.dataset);

    ReactDOM.render(<User {...data}/>, document.getElementById('user'));
}
