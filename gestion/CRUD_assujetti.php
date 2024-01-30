<div class="modal fade" id="edit_<? echo $user['id'];  ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
		<form method="POST" action="class/post_edit_ass.php?id=<? echo $user['id'];  ?>" id="userForm">
		<dv class="modal-content">
			<div class="modal-header">
					<h2 class="modal-title" id="staticBackdropLabel">Assujetti Info</h2>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="container-fuild">
					<div class="row">
						<div class="col-md-6">
							<div class="row ">
								<label class="col-md-4 text-start">
								N° Dossier: <span class="text-danger">*</span>
								</label>
								<div class="col-md-8">
									<input type="text" 
									name="numdossier" id="numdossier" 
									autocomplete="off" 
									class="form-control <?php echo (!empty($user_numdossier_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $user['numdossier']; ?>"  />
									<span class="invalid-feedback"><?php echo $user_numdossier_err;?></span>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<label class="col-md-4 text-start">
									Noms ou Raison sociale: <span class="text-danger">*</span>
									</label>
									<div class="col-md-8">
										<input type="text" 
										name="nom" id="nom" 
										autocomplete="off" 
										class="form-control <?php echo (!empty($user_nom_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $user['nom']; ?>"  />
										<span class="invalid-feedback"><?php echo $user_nom_err;?></span>

									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<label class="col-md-4 text-start">
									Email: <span class="text-danger">*</span>
									</label>
									<div class="col-md-8">
										<input type="email" 
										name="email" id="email" 
										autocomplete="off" 
										class="form-control <?php echo (!empty($user_email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $user['email']; ?>"  />
										<span class="invalid-feedback"><?php echo $user_email_err;?></span>

									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<label class="col-md-4 text-start">
									Téléphone: <span class="text-danger">*</span>
									</label>
									<div class="col-md-8">
										<input type="number " name="telephone" id="telephone"
										class="form-control <?php echo (!empty($user_telephone_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $user['telephone']; ?>"  />
										<span class="invalid-feedback"><?php echo $user_telephone_err;?></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<label class="col-md-4 text-start">
									Sigle: <span class="text-danger">*</span>
									</label>
									<div class="col-md-8">
										<input type="text" 
										name="sigle" id="sigle" 
										autocomplete="off" 
										class="form-control <?php echo (!empty($user_sigle_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $user['sigle']; ?>"  />
										<span class="invalid-feedback"><?php echo $user_sigle_err;?></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<label class="col-md-4 text-start">
									N°Id Nat.: <span class="text-danger">*</span>
									</label>
									<div class="col-md-8">
										<input type="text" 
										name="idnat" id="idnat" 
										autocomplete="off" 
										class="form-control <?php echo (!empty($user_idna_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $user['idnat']; ?>"  />
										<span class="invalid-feedback"><?php echo $user_idna_err;?></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<label class="col-md-4 text-start">
									Forme Juridique: <span class="text-danger">*</span>
									</label>
									<div class="col-md-8">
										<select name="forme" id="forme" class="form-control" required>
											<option value=""><? echo $user['forme']; ?></option>
											<option value="Personne Morale">Personne Morale</option>
											<option value="Personne Physique">Personne Physique</option>									
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<label class="col-md-4 text-start">
									Password: <span class="text-danger">*</span>
									</label>
									<div class="col-md-8">
										<input type="password" 
										name="password" id="password"  
										autocomplete="off" 
										class="form-control <?php echo (!empty($user_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo  $user['password']; ?>"  />
										<span class="invalid-feedback"><?php echo $user_password_err;?></span>
									</div>
								</div>
							</div>
						</div>	
					<div class="col-md-6">
					<div class="form-group">
						<div class="row">
							<label class="col-md-4 text-start">
							Province: <span class="text-danger">*</span>
							</label>
							<div class="col-md-8">
								<input type="text" 
								name="province" id="province" 
								autocomplete="off" 
								class="form-control <?php echo (!empty($user_province__err)) ? 'is-invalid' : ''; ?>" value="<?php echo $user['province'];; ?>"  />
								<span class="invalid-feedback"><?php echo $user_province_err;?></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="col-md-4 text-start">
							Ville: <span class="text-danger">*</span>
							</label>
							<div class="col-md-8">
								<input type="text" 
								name="ville" id="ville" 
								autocomplete="off" 
								class="form-control <?php echo (!empty($user_ville_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $user['ville'];; ?>"  />
								<span class="invalid-feedback"><?php echo $user_ville_err;?></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="col-md-4 text-start">
							Commune: <span class="text-danger">*</span>
							</label>
							<div class="col-md-8">
								<input type="text" 
								name="commune" id="commune" 
								autocomplete="off" 
								class="form-control <?php echo (!empty($user_commune_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $user['commune'];; ?>"  />
								<span class="invalid-feedback"><?php echo $user_commune_err;?></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="col-md-4 text-start">
							Quartier: <span class="text-danger">*</span>
							</label>
							<div class="col-md-8">
								<input type="text" 
								name="quartier" id="quartier" 
								autocomplete="off" 
								class="form-control <?php echo (!empty($user_quartier_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $user['quartier'];; ?>"  />
								<span class="invalid-feedback"><?php echo $user_quartier_err;?></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="col-md-4 text-start">
							Avenue: <span class="text-danger">*</span>
							</label>
							<div class="col-md-8">
								<input type="text" 
								name="avenue" id="avenue" 
								autocomplete="off" 
								class="form-control <?php echo (!empty($user_avenue_err)) ? 'is-invalid' : ''; ?>" value="<?php echo  $user['avenue'];; ?>"  />
								<span class="invalid-feedback"><?php echo $user_avenue_err;?></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="col-md-4 text-start">
							Numéro de la parcelle: <span class="text-danger">*</span>
							</label>
							<div class="col-md-8">
								<input type="number" 
								name="numero" id="numero" 
								autocomplete="off" 
								class="form-control <?php echo (!empty($user_numero_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $user['numero'];; ?>"  />
								<span class="invalid-feedback"><?php echo $user_numero_err;?></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<label class="col-md-4 text-start">
							Role: <span class="text-danger">*</span>
							</label>
							<div class="col-md-8">
								<select name="role" id="role" class="form-control <?php echo (!empty($user_role_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $user_role; ?>"  />
									<option value=""><? echo $user['role']; ?></option>
									<option value="admin">Admin</option>
									<option value="receveur">Receveur</option>
									<option value="gestionnaire">Gestionnaire</option>
									<option value="banquier">Banquier</option>
									<option value="user">Assujetti</option>										
								</select>
								<span class="invalid-feedback"><?php echo $user_role_err;?></span>
							</div>
						</div>
					</div>				
				</div>
			</div>
					</div>			
			</div>	
		
					
			<div class="modal-footer">
				<input type="hidden" name="id" id="id" />						
				<input type="hidden" name="action" id="action" value="" />
				<input type="submit" name="edit" class="btn btn-info" />
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
				</div>
			</form>
		</div>
<!---------deleting modal section--------->
<div class="modal fade" id="delete_<? echo $user['id'];  ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-l">
        <dv class="modal-content">

            <div class="modal-body">
            <div class="container text-center">
                
                <h1>Supprimer <strong><? echo $user["nom"];  ?></strong></h1>
                <p>Etes vous sure de Supprimer ce compte ?</p>

                <div class="clearfix">
                    <div class="row">
						<div class="col-6">
						<button type="button"  data-bs-dismiss="modal" class="cancelbtn" >Cancel</button>

						</div>
						<div class="col-6">
					<a href="class/post_delete_ass.php?id=<? echo $user['id']; ?>" type="button " class="deletebtn">Supprimer</a>
						</div>
					</div>
                </div>
            </div>
            </div>
        </dv>
    </div>
</div>