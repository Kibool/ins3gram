<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-info text-white">
                <h5 class="mb-2">
                    <?php echo isset($user) ? "Modifier l'utilisateur" : "Créer un utilisateur"; ?>
                </h5>
            </div>

            <?php
            if(isset($user)):
                echo form_open('admin/user/update');
            else:
                echo form_open('admin/user/create');
            endif;
            ?>

            <div class="card-body">

                <div class="row g-3">

                    <!-- Prénom -->
                    <div class="col mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="first_name" name="first_name"
                                   value="<?php echo isset($user) ? $user->first_name : ''; ?>" placeholder="Prénom" required>
                            <label for="first_name">Prénom</label>
                        </div>
                    </div>

                    <!-- Nom de famille -->
                    <div class="col mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="last_name" name="last_name"
                                   value="<?php echo isset($user) ? $user->last_name : ''; ?>" placeholder="Nom de famille" required>
                            <label for="last_name">Nom de famille</label>
                        </div>
                    </div>

                </div>

                <!-- Pseudo -->
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="username" name="username"
                               value="<?php echo isset($user) ? $user->username : ''; ?>" placeholder="Pseudo" required>
                        <label for="username">Pseudo</label>
                    </div>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" name="email"
                               value="<?php echo isset($user) ? $user->email : ''; ?>" placeholder="Adresse Email" required>
                        <label for="email">Adresse Email</label>
                    </div>
                </div>

                <!-- Mot de passe -->
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="password"
                               placeholder="Mot de passe" <?php echo isset($user) ? "" : "required"; ?>>
                        <label for="password">Mot de passe</label>
                    </div>
                </div>

                <div class="row g-3">

                    <!-- Date de naissance -->
                    <div class="col mb-3">
                        <div class="form-floating">
                            <input type="date" class="form-control" id="birthday" name="birthday"
                                   value="<?php echo isset($user) ? $user->birthday : ''; ?>" placeholder="Date de naissance" required>
                            <label for="birthday">Date de naissance</label>
                        </div>
                    </div>

                    <!-- Rôle -->
                    <div class="col mb-3">
                        <div class="form-floating">
                            <select class="form-select" id="role" name="role" required>
                                <option value="" disabled <?php echo !isset($user) ? "selected" : ""; ?>>Sélectionner un rôle</option>
                                <?php
                                $roles = ['admin' => 'Administrateur', 'editor' => 'Éditeur', 'user' => 'Utilisateur'];
                                foreach($roles as $key => $label):
                                    $selected = (isset($user) && $user->role == $key) ? "selected" : "";
                                    ?>
                                    <option value="<?php echo $key; ?>" <?php echo $selected; ?>><?php echo $label; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label for="role">Rôle</label>
                        </div>
                    </div>

                </div>

            </div>

            <div class="card-footer text-end">
                <button type="submit" class="btn btn-info text-white">
                    <?php echo isset($user) ? "Mettre à jour" : "Créer"; ?>
                </button>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>