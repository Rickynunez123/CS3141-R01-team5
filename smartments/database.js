const mongoose = require('mongoose');
mongoose.connect('mongodb://localhost:27017/mongo-exercises', {useUnifiedTopology:true, useNewUrlParser:true})
    .then(() => console.log('Connected to MonogDB...'))
    .catch(err => console.error('Could not connect to MongoDB...', err));


    /*  Schema  */
const courseSchema = new mongoose.Schema({
    name: String,
    author: String,
    tags: [ String ],
    date: {type: Date, default: Date.now},
    isPublished: Boolean
});


const Course = mongoose.model('Courses', courseSchema);

async function createCourse(){
const course = new Course({
    name: 'Node.js Course', 
    author: 'Mosh',
    tags: ['node', 'backend'],
    isPublished: true
});
//saving document 
const result = await course.save();
console.log(result);
}

/////////////////////////////////////////
/*  Query documents from the database   */
/*   get the values and add filters     */
/////////////////////////////////////////

async function getCourse(){    
const courses = await Course
    .find({author: 'Mosh',    isPublished: true})
    // .find({price: {$gte: 10, $lte:20 } })
    // .find({price: {$in: [ 10, 15, 20 ] }})
    // .find()
    // .or([ { author: 'Mosh' }, { isPublished: true }])
    // .find({ author: /^Mosh/i}) //regEx
    .limit(10)
    .sort({name: 1 })
    // .select({ name: 1, tags: 1 }); 
    .count();
console.log(courses);
}


/*  Calling functions  */
// getCourse();
createCourse();