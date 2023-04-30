<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Insert derarment data
        DB::table('departments')->insert([
            'dept_no' => 'd001',
            'dept_name' => 'Marketing',
        ]);

        DB::table('departments')->insert([
            'dept_no' => 'd002',
            'dept_name' => 'Finance',
        ]);

        DB::table('departments')->insert([
            'dept_no' => 'd003',
            'dept_name' => 'Human Resources',
        ]);

        DB::table('departments')->insert([
            'dept_no' => 'd004',
            'dept_name' => 'Production',
        ]);

        DB::table('departments')->insert([
            'dept_no' => 'd005',
            'dept_name' => 'Development',
        ]);

        DB::table('departments')->insert([
            'dept_no' => 'd006',
            'dept_name' => 'Quality Management',
        ]);

        DB::table('departments')->insert([
            'dept_no' => 'd007',
            'dept_name' => 'Sales',
        ]);

        DB::table('departments')->insert([
            'dept_no' => 'd008',
            'dept_name' => 'Research',
        ]);

        DB::table('departments')->insert([
            'dept_no' => 'd009',
            'dept_name' => 'Customer Service',
        ]);

        // Insert employees data



        // Insert salaries data
        DB::table('salaries')->insert([
            'emp_no' => '10001',
            'salary' => '60117',
            'from_date' => '1986-06-26',
            'to_date' => '1987-06-26',
        ]);

        DB::table('salaries')->insert([
            'emp_no' => '10002',
            'salary' => '65828',
            'from_date' => '1996-08-03',
            'to_date' => '1997-08-03',
        ]);

        DB::table('salaries')->insert([
            'emp_no' => '10003',
            'salary' => '40006',
            'from_date' => '1995-12-03',
            'to_date' => '1996-12-02',
        ]);

        DB::table('salaries')->insert([
            'emp_no' => '10004',
            'salary' => '40054',
            'from_date' => '1986-12-01',
            'to_date' => '1987-12-01',
        ]);

        DB::table('salaries')->insert([
            'emp_no' => '10005',
            'salary' => '78228',
            'from_date' => '1989-09-12',
            'to_date' => '1990-09-12',
        ]);

        DB::table('salaries')->insert([
            'emp_no' => '10006',
            'salary' => '40000',
            'from_date' => '1990-08-05',
            'to_date' => '1991-08-05',
        ]);

        DB::table('salaries')->insert([
            'emp_no' => '10007',
            'salary' => '56724',
            'from_date' => '1989-02-10',
            'to_date' => '1990-02-10',
        ]);

        DB::table('salaries')->insert([
            'emp_no' => '10008',
            'salary' => '46671',
            'from_date' => '1998-03-11',
            'to_date' => '1999-03-11',
        ]);

        DB::table('salaries')->insert([
            'emp_no' => '10009',
            'salary' => '60929',
            'from_date' => '1985-02-18',
            'to_date' => '1986-02-18',
        ]);

        DB::table('salaries')->insert([
            'emp_no' => '10010',
            'salary' => '72488',
            'from_date' => '1996-11-24',
            'to_date' => '1997-11-24',
        ]);

        // Insert titles data
        DB::table('titles')->insert([
            'emp_no' => '10001',
            'title' => 'Senior Engineer',
            'from_date' => '1986-06-26',
            'to_date' => '9999-01-01',
        ]);


        DB::table('titles')->insert([
            'emp_no' => '10002',
            'title' => 'Staff',
            'from_date' => '1996-08-03',
            'to_date' => '9999-01-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10003',
            'title' => 'Senior Engineer',
            'from_date' => '1995-12-03',
            'to_date' => '9999-01-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10004',
            'title' => 'Engineer',
            'from_date' => '1986-12-01',
            'to_date' => '1995-12-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10005',
            'title' => 'Senior Staff',
            'from_date' => '1989-09-12',
            'to_date' => '1996-09-12',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10006',
            'title' => 'Staff',
            'from_date' => '1990-08-05',
            'to_date' => '9999-01-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10007',
            'title' => 'Senior Engineer',
            'from_date' => '1989-02-10',
            'to_date' => '1996-02-11',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10008',
            'title' => 'Senior Staff',
            'from_date' => '1998-03-11',
            'to_date' => '2000-07-31',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10009',
            'title' => 'Assistant Engineer',
            'from_date' => '1985-02-18',
            'to_date' => '1990-02-18',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10010',
            'title' => 'Staff',
            'from_date' => '1996-11-24',
            'to_date' => '2000-06-26',
        ]);

        // Insert dept_emp data
        DB::table('dept_emp')->insert([
            'emp_no' => '10001',
            'dept_no' => 'd005',
            'from_date' => '1986-06-26',
            'to_date' => '9999-01-01',
        ]);

        DB::table('dept_emp')->insert([
            'emp_no' => '10002',
            'dept_no' => 'd007',
            'from_date' => '1996-08-03',
            'to_date' => '9999-01-01',
        ]);

        DB::table('dept_emp')->insert([
            'emp_no' => '10003',
            'dept_no' => 'd004',
            'from_date' => '1995-12-03',
            'to_date' => '9999-01-01',
        ]);

        DB::table('dept_emp')->insert([
            'emp_no' => '10004',
            'dept_no' => 'd004',
            'from_date' => '1986-12-01',
            'to_date' => '9999-01-01',
        ]);

        DB::table('dept_emp')->insert([
            'emp_no' => '10005',
            'dept_no' => 'd003',
            'from_date' => '1989-09-12',
            'to_date' => '9999-01-01',
        ]);

        DB::table('dept_emp')->insert([
            'emp_no' => '10006',
            'dept_no' => 'd005',
            'from_date' => '1990-08-05',
            'to_date' => '9999-01-01',
        ]); 

        DB::table('dept_emp')->insert([
            'emp_no' => '10007',
            'dept_no' => 'd008',
            'from_date' => '1989-02-10',
            'to_date' => '9999-01-01',
        ]);

        DB::table('dept_emp')->insert([
            'emp_no' => '10008',
            'dept_no' => 'd005',
            'from_date' => '1998-03-11',
            'to_date' => '2000-07-31',
        ]);

        DB::table('dept_emp')->insert([
            'emp_no' => '10009',
            'dept_no' => 'd006',
            'from_date' => '1985-02-18',
            'to_date' => '9999-01-01',
        ]);

        DB::table('dept_emp')->insert([
            'emp_no' => '10010',
            'dept_no' => 'd004',
            'from_date' => '1996-11-24',
            'to_date' => '2000-06-26',
        ]);

        // Insert dept_manager data

        DB::table('dept_manager')->insert([
            'dept_no' => 'd001',
            'emp_no' => '110022',
            'from_date' => '1985-01-01',
            'to_date' => '1991-10-01',
        ]);

        DB::table('dept_manager')->insert([
            'dept_no' => 'd001',
            'emp_no' => '110039',
            'from_date' => '1991-10-01',
            'to_date' => '9999-01-01',
        ]);

        DB::table('dept_manager')->insert([
            'dept_no' => 'd002',
            'emp_no' => '110085',
            'from_date' => '1985-01-01',
            'to_date' => '1989-12-17',
        ]);

        DB::table('dept_manager')->insert([
            'dept_no' => 'd002',
            'emp_no' => '110114',
            'from_date' => '1989-12-17',
            'to_date' => '9999-01-01',
        ]);

        DB::table('dept_manager')->insert([
            'dept_no' => 'd003',
            'emp_no' => '110183',
            'from_date' => '1985-01-01',
            'to_date' => '1992-03-21',
        ]);

        DB::table('dept_manager')->insert([
            'dept_no' => 'd003',
            'emp_no' => '110228',
            'from_date' => '1992-03-21',
            'to_date' => '9999-01-01',
        ]);

        DB::table('dept_manager')->insert([
            'dept_no' => 'd004',
            'emp_no' => '110303',
            'from_date' => '1985-01-01',
            'to_date' => '1988-09-09',
        ]);

        DB::table('dept_manager')->insert([
            'dept_no' => 'd004',
            'emp_no' => '110344',
            'from_date' => '1988-09-09',
            'to_date' => '9999-01-01',
        ]);

        DB::table('dept_manager')->insert([
            'dept_no' => 'd005',
            'emp_no' => '110386',
            'from_date' => '1985-01-01',
            'to_date' => '1992-08-02',
        ]);

        DB::table('dept_manager')->insert([
            'dept_no' => 'd005',
            'emp_no' => '110420',
            'from_date' => '1992-08-02',
            'to_date' => '9999-01-01',
        ]);

        DB::table('dept_manager')->insert([
            'dept_no' => 'd006',
            'emp_no' => '110511',
            'from_date' => '1985-01-01',
            'to_date' => '1996-04-12',
        ]);

        DB::table('dept_manager')->insert([
            'dept_no' => 'd006',
            'emp_no' => '110567',
            'from_date' => '1996-04-12',
            'to_date' => '9999-01-01',
        ]);

        DB::table('dept_manager')->insert([
            'dept_no' => 'd007',
            'emp_no' => '110725',
            'from_date' => '1985-01-01',
            'to_date' => '1989-10-20',
        ]);

        DB::table('dept_manager')->insert([
            'dept_no' => 'd007',
            'emp_no' => '110765',
            'from_date' => '1989-10-20',
            'to_date' => '9999-01-01',
        ]);

        DB::table('dept_manager')->insert([
            'dept_no' => 'd008',
            'emp_no' => '110800',
            'from_date' => '1985-01-01',
            'to_date' => '1992-03-08',
        ]);


        DB::table('dept_manager')->insert([
            'dept_no' => 'd008',
            'emp_no' => '110854',
            'from_date' => '1992-03-08',
            'to_date' => '9999-01-01',
        ]);

        // Insert titles data

        DB::table('titles')->insert([
            'emp_no' => '10001',
            'title' => 'Senior Engineer',
            'from_date' => '1986-06-26',
            'to_date' => '9999-01-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10002',
            'title' => 'Staff',
            'from_date' => '1996-08-03',
            'to_date' => '9999-01-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10003',
            'title' => 'Senior Engineer',
            'from_date' => '1995-12-03',
            'to_date' => '9999-01-01',
        ]);

        
        DB::table('titles')->insert([
            'emp_no' => '10004',
            'title' => 'Engineer',
            'from_date' => '1986-12-01',
            'to_date' => '1995-12-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10004',
            'title' => 'Senior Engineer',
            'from_date' => '1995-12-01',
            'to_date' => '9999-01-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10005',
            'title' => 'Senior Staff',
            'from_date' => '1996-09-12',
            'to_date' => '9999-01-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10006',
            'title' => 'Staff',
            'from_date' => '1990-08-05',
            'to_date' => '9999-01-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10007',
            'title' => 'Senior Engineer',
            'from_date' => '1989-02-10',
            'to_date' => '9999-01-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10008',
            'title' => 'Senior Staff',
            'from_date' => '1998-03-11',
            'to_date' => '2000-07-31',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10008',
            'title' => 'Staff',
            'from_date' => '2000-07-31',
            'to_date' => '9999-01-01',
        ]);


        DB::table('titles')->insert([
            'emp_no' => '10009',
            'title' => 'Assistant Engineer',
            'from_date' => '1985-02-18',
            'to_date' => '1990-02-18',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10009',
            'title' => 'Engineer',
            'from_date' => '1990-02-18',
            'to_date' => '1995-02-18',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10009',
            'title' => 'Senior Engineer',
            'from_date' => '1995-02-18',
            'to_date' => '9999-01-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10010',
            'title' => 'Staff',
            'from_date' => '1996-11-24',
            'to_date' => '9999-01-01',
        ]);


        DB::table('titles')->insert([
            'emp_no' => '10011',
            'title' => 'Staff',
            'from_date' => '1990-01-22',
            'to_date' => '1996-11-09',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10011',
            'title' => 'Senior Staff',
            'from_date' => '1996-11-09',
            'to_date' => '9999-01-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10012',
            'title' => 'Engineer',
            'from_date' => '1992-12-18',
            'to_date' => '2000-12-18',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10012',
            'title' => 'Senior Engineer',
            'from_date' => '2000-12-18',
            'to_date' => '9999-01-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10013',
            'title' => 'Staff',
            'from_date' => '1985-10-20',
            'to_date' => '9999-01-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10014',
            'title' => 'Engineer',
            'from_date' => '1993-12-29',
            'to_date' => '9999-01-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10015',
            'title' => 'Senior Engineer',
            'from_date' => '1992-09-19',
            'to_date' => '1993-08-22',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10015',
            'title' => 'Engineer',
            'from_date' => '1993-08-22',
            'to_date' => '9999-01-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10016',
            'title' => 'Senior Staff',
            'from_date' => '1998-02-11',
            'to_date' => '9999-01-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10017',
            'title' => 'Senior Engineer',
            'from_date' => '2000-08-03',
            'to_date' => '9999-01-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10018',
            'title' => 'Engineer',
            'from_date' => '1987-04-03',
            'to_date' => '1995-04-03',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10018',
            'title' => 'Senior Engineer',
            'from_date' => '1995-04-03',
            'to_date' => '9999-01-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10019',
            'title' => 'Staff',
            'from_date' => '1999-04-30',
            'to_date' => '9999-01-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10020',
            'title' => 'Senior Staff',
            'from_date' => '1997-12-30',
            'to_date' => '9999-01-01',
        ]);

        DB::table('titles')->insert([
            'emp_no' => '10021',
            'title' => 'Senior Engineer',
            'from_date' => '1988-02-10',
            'to_date' => '2002-07-15',
        ]);

        

    
        
         
}
}