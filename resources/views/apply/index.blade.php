<x-web-layout>

    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                <h4>
                    UniProx Stuff Application Form
                </h4>
            </div>
            <div class="card-body">

                <form action="{{ route('store') }}" method="post">

                    <div class="card mb-3">
                        <div class="card-header">
                            <h4>Personal Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6 mb-2">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                                    @error("name") <label class="text-danger">{{ $message }}</label> @enderror
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Your Phone Number">
                                    @error("phone") <label class="text-danger">{{ $message }}</label> @enderror
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label for="age">Age</label>
                                    <input type="age" id="age" name="age" class="form-control" placeholder="What is your age">
                                    @error("age") <label class="text-danger">{{ $message }}</label> @enderror
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Your email Number">
                                    @error("email") <label class="text-danger">{{ $message }}</label> @enderror
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label for="Password">Password</label>
                                    <input type="password" id="Password" name="password" class="form-control" placeholder="Your Password Number">
                                    @error("password") <label class="text-danger">{{ $message }}</label> @enderror
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label for="confirmPassword">Confirm Password</label>
                                    <input type="password" id="confirmPassword" name="confirm-password" class="form-control" placeholder="Your Password Number">
                                    @error("confirm-password") <label class="text-danger">{{ $message }}</label> @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4>
                                Our Questions
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6 mb-2">
                                    <label for="minecraft_username">Enter Your Minecraft Username</label>
                                    <input type="text" id="minecraft_username" name="minecraft_username" class="form-control" placeholder="Enter Your Minecraft UserName">
                                    @error("minecraft_username") <label class="text-danger">{{ $message }}</label> @enderror
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label for="discord_tag">Enter Your Discord Username</label>
                                    <input type="text" id="discord_tag" name="discord_tag" class="form-control" placeholder="Enter Your discord Username">
                                    @error("discord_tag") <label class="text-danger">{{ $message }}</label> @enderror
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label for="applying_for">Applying For</label>
                                    <select name="applying_for" id="applying_for" class="form-control">
                                        <option value="Developer">Developer</option>
                                        <option value="Moderator">Moderator</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Management Team">Management Team</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label for="experience">Explain about your Experience</label>
                                    <textarea name="experience" id="experience" cols="30" rows="1" class="form-control"></textarea>
                                    @error("experience") <label class="text-danger">{{ $message }}</label> @enderror
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label for="skills">Your skills</label>
                                    <input type="text" id="skills" name="skills" class="form-control" placeholder="Enter Your discord Username">
                                    @error("skills") <label class="text-danger">{{ $message }}</label> @enderror
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label for="working_hour">How much time can you give us?</label>
                                    <input type="text" id="working_hour" name="working_hour" class="form-control" placeholder="How much time can you give?">
                                    @error("working_hour") <label class="text-danger">{{ $message }}</label> @enderror
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label for="why_join_us">Why you want to join UniProx?</label>
                                    <input type="text" id="why_join_us" name="why_join_us" class="form-control" placeholder="Why you want to join UniProx?">
                                    @error("why_join_us") <label class="text-danger">{{ $message }}</label> @enderror
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label for="suggestions_for_us">Suggest us what we need to do?</label>
                                    <input type="text" id="suggestions_for_us" name="suggestions_for_us" class="form-control" placeholder="What we need to do?">
                                    @error("suggestions_for_us") <label class="text-danger">{{ $message }}</label> @enderror
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label for="development_experience">Do you have any Debvelopment Experience</label>
                                    <input type="text" id="development_experience" name="development_experience" class="form-control" placeholder="Dev Exp">
                                    @error("development_experience") <label class="text-danger">{{ $message }}</label> @enderror
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label for="handling_challenging_situation">Known Programming Language <i>(For Developers)</i></label>
                                    <input type="text" id="handling_challenging_situation" name="handling_challenging_situation" class="form-control" placeholder="Write in detail">
                                    @error("handling_challenging_situation") <label class="text-danger">{{ $message }}</label> @enderror
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label for="handling_challenging_situation">How do you handle an Challenging Situation?</label>
                                    <input type="text" id="handling_challenging_situation" name="handling_challenging_situation" class="form-control" placeholder="How do you handle an Challenging Situation?">
                                    @error("handling_challenging_situation") <label class="text-danger">{{ $message }}</label> @enderror
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label for="strategies_of_updates_and_trends">How do you want to adapt to new developments and trends?</label>
                                    <input type="text" id="strategies_of_updates_and_trends" name="strategies_of_updates_and_trends" class="form-control" placeholder="Ex: By Drink some Poison">
                                    @error("strategies_of_updates_and_trends") <label class="text-danger">{{ $message }}</label> @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="btn btn-success float-end">Apply</button>
                    </div>
                    
                </form>

            </div>
        </div>
    </div>

</x-web-layout>