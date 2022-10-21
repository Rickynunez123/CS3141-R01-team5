const mongoose = require('mongoose');
const express = require('express');
const app = express();


/*  Connect to mongo db accesing smartments database */
mongoose.connect('mongodb://localhost:27017/smartments', {useUnifiedTopology:true, useNewUrlParser:true})
.then(() => console.log('Connected to MonogDB...'))
.catch(err => console.error('Could not connect to MongoDB...', err));


/*  importing  */
const tenants = require('./routes/tenants');
const buildings = require('./routes/building');
const apartments = require('./routes/apartments');
const landlord = require('./routes/landlord');
const rental = require('./routes/rental');

//changes

//adding middleware 
app.use(express.json());          //req.body
app.use('/api/smartments/tenants', tenants);
app.use('/api/smartments/building', buildings);
app.use('/api/smartments/apartments', apartments);
app.use('/api/smartments/landlord', landlord);
app.use('/api/smartments/rental', rental);



const port = process.env.PORT || 3000;
app.listen(port, () => console.log(`listening in port ${port}...`));
